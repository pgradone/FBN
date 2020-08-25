/* main foodgroups IDs */
insert into foodgroups (id, parent_group_id) select distinct group_id, group_id from foods order by group_id;
/* subgroup IDs and their parent group_ids */
insert into foodgroups (id, parent_group_id) select distinct sub_group_id, group_id from foods where sub_group_id > 28 order by sub_group_id;

/* main group names in 8 languages */
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 2, `group_EN` FROM `foods` order by group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 3, `group_FR` FROM `foods` order by group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 4, `group_DE` FROM `foods` order by group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 5, `group_PT` FROM `foods` order by group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 6, `group_IT` FROM `foods` order by group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 7, `group_ES` FROM `foods` order by group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 8, `group_NL` FROM `foods` order by group_id;

/* sub group names in 8 languages */
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 2, `sub_group_EN` FROM `foods` where sub_group_id > 28 and id <> 679 order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 3, `sub_group_FR` FROM `foods` where sub_group_id > 28 and id <> 679 order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 4, `sub_group_DE` FROM `foods` where sub_group_id > 28 and id <> 679 order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 5, `sub_group_PT` FROM `foods` where sub_group_id > 28 and id <> 679 order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 6, `sub_group_IT` FROM `foods` where sub_group_id > 28 and id <> 679 order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 7, `sub_group_ES` FROM `foods` where sub_group_id > 28 and id <> 679 order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 8, `sub_group_NL` FROM `foods` where sub_group_id > 28 and id <> 679 order by sub_group_id;

/* Insert Ingredients with their belonging foodgroups_id */
INSERT INTO ingredients (id, origin, nutriscore, picture, foodgroup_id) SELECT ID, origin, nutriscore, picture, sub_group_id FROM foods order by ID;

/* ingredient names in 8 languages */
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 2, food_name_EN FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 3, food_name_FR FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 4, food_name_DE FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 5, food_name_PT FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 6, food_name_IT FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 7, food_name_ES FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 8, food_name_NL FROM foods;

/* View original foods table with a query */
CREATE OR REPLACE VIEW food_v
AS
SELECT i.id, i.foodgroup_id, i.origin, i.nutriscore, 
  in_en.name food_name_EN, in_fr.name food_name_FR, in_de.name food_name_DE, in_pt.name food_name_PT, in_it.name food_name_IT, in_es.name food_name_ES, in_nl.name food_name_NL,
  fgn_p_en.name group_EN, fgn_p_fr.name group_FR, fgn_p_de.name group_DE,  fgn_p_pt.name group_PT, fgn_p_it.name group_IT, fgn_p_es.name group_ES, fgn_p_nl.name group_NL,
	fgn_en.name sub_group_EN, fgn_fr.name sub_group_FR, fgn_de.name sub_group_DE, fgn_pt.name sub_group_PT, fgn_it.name sub_group_IT, fgn_es.name sub_group_ES, fgn_nl.name sub_group_NL
	from ingredients i 

left join ingredients_names in_en on i.id = in_en.ingredient_id and in_en.language_id = 2
left join ingredients_names in_fr on i.id = in_fr.ingredient_id and in_fr.language_id = 3
left join ingredients_names in_de on i.id = in_de.ingredient_id and in_de.language_id = 4
left join ingredients_names in_pt on i.id = in_pt.ingredient_id and in_pt.language_id = 5
left join ingredients_names in_it on i.id = in_it.ingredient_id and in_it.language_id = 6
left join ingredients_names in_es on i.id = in_es.ingredient_id and in_es.language_id = 7
left join ingredients_names in_nl on i.id = in_nl.ingredient_id and in_nl.language_id = 8

left join foodgroups fg on i.foodgroup_id = fg.id
left join foodgroup_names fgn_en on fg.id = fgn_en.foodgroup_id and fgn_en.language_id = 2
left join foodgroup_names fgn_fr on fg.id = fgn_fr.foodgroup_id and fgn_fr.language_id = 3
left join foodgroup_names fgn_de on fg.id = fgn_de.foodgroup_id and fgn_de.language_id = 4
left join foodgroup_names fgn_pt on fg.id = fgn_pt.foodgroup_id and fgn_pt.language_id = 5
left join foodgroup_names fgn_it on fg.id = fgn_it.foodgroup_id and fgn_it.language_id = 6
left join foodgroup_names fgn_es on fg.id = fgn_es.foodgroup_id and fgn_es.language_id = 7
left join foodgroup_names fgn_nl on fg.id = fgn_nl.foodgroup_id and fgn_nl.language_id = 8

left join foodgroup_names fgn_p_en on fg.parent_group_id = fgn_p_en.foodgroup_id and fgn_p_en.language_id = 2
left join foodgroup_names fgn_p_fr on fg.parent_group_id = fgn_p_fr.foodgroup_id and fgn_p_fr.language_id = 3
left join foodgroup_names fgn_p_de on fg.parent_group_id = fgn_p_de.foodgroup_id and fgn_p_de.language_id = 4
left join foodgroup_names fgn_p_pt on fg.parent_group_id = fgn_p_pt.foodgroup_id and fgn_p_pt.language_id = 5
left join foodgroup_names fgn_p_it on fg.parent_group_id = fgn_p_it.foodgroup_id and fgn_p_it.language_id = 6
left join foodgroup_names fgn_p_es on fg.parent_group_id = fgn_p_es.foodgroup_id and fgn_p_es.language_id = 7
left join foodgroup_names fgn_p_nl on fg.parent_group_id = fgn_p_nl.foodgroup_id and fgn_p_nl.language_id = 8

order by i.id;

/* -----------------------*/
