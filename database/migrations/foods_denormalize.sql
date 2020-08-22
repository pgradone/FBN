/* main foodgroups IDs */
insert into foodgroups (id) select distinct group_id from foods order by group_id;
/* subgroup IDs and their parent group_ids */
insert into foodgroups (id, parent_group_id) select distinct sub_group_id, group_id from foods where sub_group_id > 27 order by sub_group_id;

/* main group names in 8 languages */
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 2, `group_EN` FROM `foods` order by group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 3, `group_FR` FROM `foods` order by group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct group_id, 4, `group_FR` FROM `foods` order by group_id;
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
