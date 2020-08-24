/* main foodgroups IDs */
insert into foodgroups (id) select distinct group_id from foods order by group_id;
/* subgroup IDs and their parent group_ids */
insert into foodgroups (id, parent_group_id) select distinct sub_group_id, group_id from foods where sub_group_id > 27 order by sub_group_id;

/* ingredient names in 8 languages */
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 2, food_name_EN FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 3, food_name_FR FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 4, food_name_DE FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 5, food_name_PT FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 6, food_name_IT FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 7, food_name_ES FROM foods;
insert into ingredients_names (ingredient_id, language_id, name) SELECT id, 8, food_name_NL FROM foods;

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
INSERT INTO ingredients (id, foodgroup_id) SELECT ID, sub_group_id FROM foods order by ID;

/* View original foods table with a query */
SELECT i.id, i.foodgroup_id, in_en.name from ingredients i 
left join ingredients_names in_en on i.id = in_en.ingredient_id

SELECT i.id, i.foodgroup_id, fgn_main.name, fgn_sub.name subgroup from ingredients i 
left join foodgroups fg_sub on i.foodgroup_id = fg_sub.id
left join foodgroups fg_main on i.foodgroup_id = fg_main.parent_group_id
left join foodgroup_names fgn_sub on fg_sub.id = fgn_sub.foodgroup_id and fgn_sub.language_id = 2
left join foodgroup_names fgn_main on fg_main.id = fgn_main.foodgroup_id and fgn_main.language_id = 2