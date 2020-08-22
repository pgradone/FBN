/* main foodgroups IDs */
insert into foodgroups (id) select groupid from foods;
/* subgroup IDs and their parent group_ids */
insert into foodgroups (id, parent_group_id) select distinct sub_group_id, groupid from foods where sub_group_id > 27 order by sub_group_id;

/* main group names in 8 languages */
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct groupid, 2, `group` FROM `foods` order by groupid;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct groupid, 3, `group_FR` FROM `foods` order by groupid;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct groupid, 4, `group_FR` FROM `foods` order by groupid;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct groupid, 5, `group_PO` FROM `foods` order by groupid;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct groupid, 6, `group_IT` FROM `foods` order by groupid;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct groupid, 7, `group_ES` FROM `foods` order by groupid;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct groupid, 8, `group_NL` FROM `foods` order by groupid;

/* sub group names in 8 languages */
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 2, `sub_group` FROM `foods` order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 3, `sub_group_FR` FROM `foods` order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 4, `sub_group_DE` FROM `foods` order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 5, `sub_group_PO` FROM `foods` order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 6, `sub_group_IT` FROM `foods` order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 7, `sub_group_ES` FROM `foods` order by sub_group_id;
insert into foodgroup_names (foodgroup_id, language_id, name) SELECT distinct sub_group_id, 8, `sub_group_NL` FROM `foods` order by sub_group_id;
