<?php

##############################################################################
# *                                                                          #
# * 2MOONS                                                                   #
# *                                                                          #
# * @version 2010 By ShadoX from titanspace.de                               #
# *                                                                          #
# *	                                                                         #
# *  This program is free software: you can redistribute it and/or modify    #
# *  it under the terms of the GNU General Public License as published by    #
# *  the Free Software Foundation, either version 3 of the License, or       #
# *  (at your option) any later version.                                     #
# *	                                                                         #
# *  This program is distributed in the hope that it will be useful,         #
# *  but WITHOUT ANY WARRANTY; without even the implied warranty of          #
# *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           #
# *  GNU General Public License for more details.                            #
# *                                                                          #
##############################################################################

$QryTableAks         = "CREATE TABLE IF NOT EXISTS `prefix_".AKS."` ( ";
$QryTableAks        .= "`id` bigint(20) unsigned NOT NULL auto_increment, ";
$QryTableAks        .= "`name` varchar(50) collate utf8_general_ci default NULL, ";
$QryTableAks        .= "`teilnehmer` varchar(50) collate utf8_general_ci, ";
$QryTableAks        .= "`flotten` varchar(500) collate utf8_general_ci, ";
$QryTableAks        .= "`ankunft` int(32) default NULL, ";
$QryTableAks        .= "`galaxy` int(2) default NULL, ";
$QryTableAks        .= "`system` int(4) default NULL, ";
$QryTableAks        .= "`planet` int(2) default NULL, ";
$QryTableAks        .= "`planet_type` tinyint(1) default NULL, ";
$QryTableAks        .= "`eingeladen` varchar(50) character set utf8 default NULL, ";
$QryTableAks        .= "PRIMARY KEY  (`id`) ";
$QryTableAks        .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableAlliance    = "CREATE TABLE IF NOT EXISTS `prefix_".ALLIANCE."` ( ";
$QryTableAlliance   .= "`id` int(11) NOT NULL auto_increment, ";
$QryTableAlliance   .= "`ally_name` varchar(50) character set utf8 default '', ";
$QryTableAlliance   .= "`ally_tag` varchar(20) character set utf8 default '', ";
$QryTableAlliance   .= "`ally_owner` int(11) NOT NULL default '0', ";
$QryTableAlliance   .= "`ally_register_time` int(11) NOT NULL default '0', ";
$QryTableAlliance   .= "`ally_description` text character set utf8, ";
$QryTableAlliance   .= "`ally_web` varchar(255) character set utf8 default '', ";
$QryTableAlliance   .= "`ally_text` text character set utf8, ";
$QryTableAlliance   .= "`ally_image` varchar(255) character set utf8 default '', ";
$QryTableAlliance   .= "`ally_request` varchar(1000) character set utf8, ";
$QryTableAlliance   .= "`ally_request_waiting` varchar(500) character set utf8, ";
$QryTableAlliance   .= "`ally_request_notallow` tinyint(4) NOT NULL default '0', ";
$QryTableAlliance   .= "`ally_owner_range` varchar(32) character set utf8 default '', ";
$QryTableAlliance   .= "`ally_ranks` text character set utf8, ";
$QryTableAlliance   .= "`ally_members` int(11) NOT NULL default '0', ";
$QryTableAlliance   .= "`ally_stats` tinyint(1) NOT NULL default '1', ";
$QryTableAlliance   .= "`ally_diplo` tinyint(1) NOT NULL default '1', ";
$QryTableAlliance   .= "PRIMARY KEY  (`id`) ";
$QryTableAlliance   .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableBanned      = "CREATE TABLE IF NOT EXISTS `prefix_".BANNED."` ( ";
$QryTableBanned     .= "`id` bigint(11) unsigned NOT NULL auto_increment, ";
$QryTableBanned     .= "`who` VARCHAR(64) character set utf8 NOT NULL default '', ";
$QryTableBanned     .= "`theme` varchar(500) character set utf8 NOT NULL, ";
$QryTableBanned     .= "`who2` VARCHAR(64) character set utf8 NOT NULL default '', ";
$QryTableBanned     .= "`time` int(11) NOT NULL default '0', ";
$QryTableBanned     .= "`longer` int(11) NOT NULL default '0', ";
$QryTableBanned     .= "`author` VARCHAR(64) character set utf8 NOT NULL default '', ";
$QryTableBanned     .= "`email` VARCHAR(64) character set utf8 NOT NULL default '', ";
$QryTableBanned     .= "KEY `ID` (`id`) ";
$QryTableBanned     .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableBuddy       = "CREATE TABLE IF NOT EXISTS `prefix_".BUDDY."` ( ";
$QryTableBuddy      .= "`id` bigint(11) unsigned NOT NULL auto_increment, ";
$QryTableBuddy      .= "`sender` int(11) NOT NULL default '0', ";
$QryTableBuddy      .= "`owner` int(11) NOT NULL default '0', ";
$QryTableBuddy      .= "`active` tinyint(3) NOT NULL default '0', ";
$QryTableBuddy      .= "`text` varchar(255) character set utf8, ";
$QryTableBuddy      .= "PRIMARY KEY  (`id`) ";
$QryTableBuddy      .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableChat        = "CREATE TABLE IF NOT EXISTS `prefix_".CHAT."` (";
$QryTableChat       .= "`messageid` int(5) unsigned NOT NULL AUTO_INCREMENT,";
$QryTableChat       .= "`user` varchar(255) NOT NULL DEFAULT '',";
$QryTableChat       .= "`message` varchar(255) NOT NULL,";
$QryTableChat       .= "`timestamp` int(11) NOT NULL DEFAULT '0',";
$QryTableChat       .= "`ally_id` int(11) NOT NULL DEFAULT '0',";
$QryTableChat       .= "PRIMARY KEY (`messageid`)";
$QryTableChat       .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";


$QryTableConfig      = "CREATE TABLE IF NOT EXISTS `prefix_".CONFIG."` ( ";
$QryTableConfig     .= "`config_name` varchar(64) character set utf8 NOT NULL, ";
$QryTableConfig     .= "`config_value` varchar(255) character set utf8 NOT NULL, ";
$QryTableConfig     .= "PRIMARY KEY  (`config_name`)";
$QryTableConfig     .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryInsertConfig     = "INSERT INTO `prefix_".CONFIG."` ";
$QryInsertConfig    .= "(`config_name`           , `config_value`) VALUES ";
$QryInsertConfig    .= "('VERSION'          	 , '".RCINSTALL_VERSION.".".REVISION."'), ";
$QryInsertConfig    .= "('users_amount'          , '1'), ";
$QryInsertConfig    .= "('game_speed'            , '2500'), ";
$QryInsertConfig    .= "('fleet_speed'           , '2500'), ";
$QryInsertConfig    .= "('resource_multiplier'   , '1'), ";
$QryInsertConfig    .= "('Fleet_Cdr'             , '30'), ";
$QryInsertConfig    .= "('Defs_Cdr'              , '30'), ";
$QryInsertConfig    .= "('initial_fields'        , '163'), ";
$QryInsertConfig    .= "('COOKIE_NAME'           , '2Moons'), ";
$QryInsertConfig    .= "('game_name'             , '2Moons'), ";
$QryInsertConfig    .= "('game_disable'          , '1'), ";
$QryInsertConfig    .= "('close_reason'          , 'Game ist zurzeit geschlossen'), ";
$QryInsertConfig    .= "('metal_basic_income'    , '20'), ";
$QryInsertConfig    .= "('crystal_basic_income'  , '10'), ";
$QryInsertConfig    .= "('deuterium_basic_income', '0'), ";
$QryInsertConfig    .= "('energy_basic_income'   , '0'), ";
$QryInsertConfig    .= "('BuildLabWhileRun'      , '0'), ";
$QryInsertConfig    .= "('LastSettedGalaxyPos'   , '1'), ";
$QryInsertConfig    .= "('LastSettedSystemPos'   , '1'), ";
$QryInsertConfig    .= "('LastSettedPlanetPos'   , '1'), ";
$QryInsertConfig    .= "('noobprotection'        , '1'), ";
$QryInsertConfig    .= "('noobprotectiontime'    , '5000'), ";
$QryInsertConfig    .= "('noobprotectionmulti'   , '5'), ";
$QryInsertConfig    .= "('forum_url'             , 'http://www.xnova-reloaded.eu/' ), ";
$QryInsertConfig    .= "('adm_attack'         	 , '0'), ";
$QryInsertConfig    .= "('debug'                 , '0'), ";
$QryInsertConfig    .= "('lang'                  , '".DEFAULT_LANG."'), ";
$QryInsertConfig    .= "('stat'                  , '0'), ";
$QryInsertConfig    .= "('stat_level'            , '2'), ";
$QryInsertConfig    .= "('stat_last_update'      , '1'), ";
$QryInsertConfig    .= "('stat_settings'         , '1000'), ";
$QryInsertConfig    .= "('stat_amount'           , '25'), ";
$QryInsertConfig    .= "('stat_update_time'      , '15'), ";
$QryInsertConfig    .= "('stat_flying'           , '1'), ";
$QryInsertConfig    .= "('ts_modon'         	 , '0'), ";
$QryInsertConfig    .= "('ts_server'           	 , '12.34.56.78'), ";
$QryInsertConfig    .= "('ts_tcpport'          	 , '51234'), ";
$QryInsertConfig    .= "('ts_udpport'          	 , '8767'), ";
$QryInsertConfig    .= "('ts_timeout'        	 , '1'), ";
$QryInsertConfig    .= "('ts_version'        	 , '2'), ";
$QryInsertConfig    .= "('reg_closed'            , '0'), ";
$QryInsertConfig    .= "('OverviewNewsFrame'     , '1'), ";
$QryInsertConfig    .= "('OverviewNewsText'		 , 'Herzlich Willkommen bei 2Moons RC".RCINSTALL_VERSION."!'), ";
$QryInsertConfig    .= "('capaktiv'      		 , '0'), ";
$QryInsertConfig    .= "('cappublic'			 , ''), ";
$QryInsertConfig    .= "('capprivate'			 , ''), ";
$QryInsertConfig    .= "('min_build_time'		 , '1'), ";
$QryInsertConfig    .= "('cron_lock'			 , '0'), ";
$QryInsertConfig    .= "('moderation'			 , '1,0,0,1;1,1,0,1;'), ";
$QryInsertConfig    .= "('smtp_host'			 , ''), ";
$QryInsertConfig    .= "('smtp_port'			 , ''), ";
$QryInsertConfig    .= "('smtp_user'			 , ''), ";
$QryInsertConfig    .= "('smtp_pass'			 , ''), ";
$QryInsertConfig    .= "('smtp_ssl'				 , ''), ";
$QryInsertConfig    .= "('smtp_sendmail'		 , ''), ";
$QryInsertConfig    .= "('user_valid'			 , '0'), ";
$QryInsertConfig    .= "('stats_fly_lock'		 , '0'), ";
$QryInsertConfig    .= "('ftp_server'			 , ''), ";
$QryInsertConfig    .= "('ftp_user_name'		 , ''), ";
$QryInsertConfig    .= "('ftp_user_pass'		 , ''), ";
$QryInsertConfig    .= "('ftp_root_path'		 , ''), ";
$QryInsertConfig    .= "('fb_on'                 , '0'), ";
$QryInsertConfig    .= "('fb_apikey'             , ''), ";
$QryInsertConfig    .= "('fb_skey'               , ''), ";
$QryInsertConfig    .= "('ga_active'             , '0'), ";
$QryInsertConfig    .= "('ga_key'                , ''), ";
$QryInsertConfig    .= "('moduls'                , '1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1;1'), ";
$QryInsertConfig    .= "('stat_last_db_update'   , '0'); ";

$QryTableDiplo       = "CREATE TABLE `prefix_".DIPLO."` ( ";
$QryTableDiplo      .= "`id` int(11) NOT NULL AUTO_INCREMENT, ";
$QryTableDiplo      .= "`owner_1` int(11) NOT NULL, ";
$QryTableDiplo      .= "`owner_2` int(11) NOT NULL, ";
$QryTableDiplo      .= "`level` tinyint(1) NOT NULL, ";
$QryTableDiplo      .= "`accept` tinyint(1) NOT NULL, ";
$QryTableDiplo      .= "`accept_text` varchar(255) NOT NULL, ";
$QryTableDiplo      .= "PRIMARY KEY (`id`), ";
$QryTableDiplo      .= "KEY `owner_1` (`owner_1`,`owner_2`) ";
$QryTableDiplo      .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8; ";

$QryTableErrors      = "CREATE TABLE IF NOT EXISTS `prefix_".ERRORS."` ( ";
$QryTableErrors     .= "`error_id` int(11) NOT NULL auto_increment, ";
$QryTableErrors     .= "`error_sender` varchar(32) character set utf8 NOT NULL default '0', ";
$QryTableErrors     .= "`error_time` int(11) NOT NULL default '0', ";
$QryTableErrors     .= "`error_type` varchar(32) character set utf8 NOT NULL default 'unknown', ";
$QryTableErrors     .= "`error_text` text character set utf8, ";
$QryTableErrors     .= "`error_page` varchar(32) character set utf8 NOT NULL default 'unknown', ";
$QryTableErrors     .= "PRIMARY KEY  (`error_id`) ";
$QryTableErrors     .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableFleets      = "CREATE TABLE IF NOT EXISTS `prefix_".FLEETS."` ( ";
$QryTableFleets     .= "`fleet_id` int(11) unsigned NOT NULL auto_increment, ";
$QryTableFleets     .= "`fleet_owner` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_mission` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_amount` bigint(11) unsigned NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_array` varchar(500) character set utf8, ";
$QryTableFleets     .= "`fleet_start_time` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_start_galaxy` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_start_system` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_start_planet` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_start_type` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_end_time` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_end_stay` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_end_galaxy` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_end_system` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_end_planet` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_end_type` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_target_obj` int(2) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_resource_metal` bigint(11) unsigned NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_resource_crystal` bigint(11) unsigned NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_resource_deuterium` bigint(11) unsigned NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_resource_darkmatter` bigint(11) unsigned NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_target_owner` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`fleet_group` varchar (15) NOT NULL DEFAULT '0', ";
$QryTableFleets     .= "`fleet_mess` int(11) NOT NULL default '0', ";
$QryTableFleets     .= "`start_time` int(11) default NULL, ";
$QryTableFleets     .= "`fleet_busy` TINYINT(1) NOT NULL DEFAULT '0', ";
$QryTableFleets     .= "PRIMARY KEY  (`fleet_id`) ";
$QryTableFleets     .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableMessages    = "CREATE TABLE IF NOT EXISTS `prefix_".MESSAGES."` ( ";
$QryTableMessages   .= "`message_id` int(11) unsigned NOT NULL auto_increment, ";
$QryTableMessages   .= "`message_owner` int(11) NOT NULL default '0', ";
$QryTableMessages   .= "`message_sender` int(11) NOT NULL default '0', ";
$QryTableMessages   .= "`message_time` int(11) NOT NULL default '0', ";
$QryTableMessages   .= "`message_type` int(11) NOT NULL default '0', ";
$QryTableMessages   .= "`message_from` varchar(48) character set utf8 default NULL, ";
$QryTableMessages   .= "`message_subject` varchar(48) character set utf8 default NULL, ";
$QryTableMessages   .= "`message_text` text character set utf8, ";
$QryTableMessages   .= "PRIMARY KEY  (`message_id`) ";
$QryTableMessages   .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableNews        = "CREATE TABLE IF NOT EXISTS `prefix_".NEWS."` (";
$QryTableNews       .= "`id` int(11) unsigned NOT NULL AUTO_INCREMENT,";
$QryTableNews       .= "`user` varchar(64) NOT NULL,";
$QryTableNews       .= "`date` int(11) NOT NULL,";
$QryTableNews       .= "`title` varchar(64) NOT NULL,";
$QryTableNews       .= "`text` varchar(255) NOT NULL,";
$QryTableNews       .= "PRIMARY KEY (`id`)";
$QryTableNews       .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8;";

$QryTableNotes       = "CREATE TABLE IF NOT EXISTS `prefix_".NOTES."` ( ";
$QryTableNotes      .= "`id` int(11) NOT NULL auto_increment, ";
$QryTableNotes      .= "`owner` int(11) default NULL, ";
$QryTableNotes      .= "`time` int(11) default NULL, ";
$QryTableNotes      .= "`priority` tinyint(1) default NULL, ";
$QryTableNotes      .= "`title` varchar(32) character set utf8 default NULL, ";
$QryTableNotes      .= "`text` varchar(255) character set utf8, ";
$QryTableNotes      .= "PRIMARY KEY  (`id`) ";
$QryTableNotes      .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTablePlanets     = "CREATE TABLE IF NOT EXISTS `prefix_".PLANETS."` ( ";
$QryTablePlanets    .= "`id` int(11) NOT NULL auto_increment, ";
$QryTablePlanets    .= "`name` varchar(255) character set utf8 default 'Hauptplanet', ";
$QryTablePlanets    .= "`id_owner` int(11) default NULL, ";
$QryTablePlanets    .= "`id_level` int(11) default NULL, ";
$QryTablePlanets    .= "`galaxy` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`system` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`planet` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`last_update` int(11) default NULL, ";
$QryTablePlanets    .= "`planet_type` int(11) NOT NULL default '1', ";
$QryTablePlanets    .= "`destruyed` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`b_building` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`b_building_id` varchar(500) character set utf8 NOT NULL, ";
$QryTablePlanets    .= "`b_tech` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`b_tech_id` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`b_hangar` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`b_hangar_id` varchar(500) character set utf8 NOT NULL, ";
$QryTablePlanets    .= "`b_hangar_plus` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`image` varchar(32) character set utf8 NOT NULL default 'normaltempplanet01', ";
$QryTablePlanets    .= "`diameter` int(11) NOT NULL default '12800', ";
$QryTablePlanets    .= "`points` bigint(20) default '0', ";
$QryTablePlanets    .= "`ranks` bigint(20) default '0', ";
$QryTablePlanets    .= "`field_current` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`field_max` int(11) NOT NULL default '163', ";
$QryTablePlanets    .= "`temp_min` int(3) NOT NULL default '-17', ";
$QryTablePlanets    .= "`temp_max` int(3) NOT NULL default '23', ";
$QryTablePlanets    .= "`metal` double(132,8) UNSIGNED NOT NULL default '0.00000000', ";
$QryTablePlanets    .= "`metal_perhour` int(11) UNSIGNED NOT NULL default '0', ";
$QryTablePlanets    .= "`metal_max` bigint(20) UNSIGNED default '100000', ";
$QryTablePlanets    .= "`crystal` double(132,8) UNSIGNED NOT NULL default '0.00000000', ";
$QryTablePlanets    .= "`crystal_perhour` int(11) UNSIGNED NOT NULL default '0', ";
$QryTablePlanets    .= "`crystal_max` bigint(20) UNSIGNED default '100000', ";
$QryTablePlanets    .= "`deuterium` double(132,8) UNSIGNED NOT NULL default '0.00000000', ";
$QryTablePlanets    .= "`deuterium_used` int(11) UNSIGNED NOT NULL default '0', ";
$QryTablePlanets    .= "`deuterium_perhour` int(11) UNSIGNED NOT NULL default '0', ";
$QryTablePlanets    .= "`deuterium_max` bigint(20) UNSIGNED default '100000', ";
$QryTablePlanets    .= "`energy_used` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`energy_max` bigint(20) NOT NULL default '0', ";
$QryTablePlanets    .= "`metal_mine` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`crystal_mine` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`deuterium_sintetizer` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`solar_plant` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`fusion_plant` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`robot_factory` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`nano_factory` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`hangar` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`metal_store` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`crystal_store` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`deuterium_store` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`laboratory` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`terraformer` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`university` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`ally_deposit` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`silo` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`small_ship_cargo` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`big_ship_cargo` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`light_hunter` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`heavy_hunter` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`crusher` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`battle_ship` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`colonizer` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`recycler` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`spy_sonde` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`bomber_ship` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`solar_satelit` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`destructor` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`dearth_star` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`battleship` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`supernova` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`bahamut` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`starcatcher` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`ifrit` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`shiva` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`catoblepas` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`oxion` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`odin` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`orbital_station` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`misil_launcher` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`small_laser` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`big_laser` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`gauss_canyon` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`ionic_canyon` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`buster_canyon` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`small_protection_shield` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`planet_protector` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`big_protection_shield` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`graviton_canyon` int(11) NOT NULL default '0',";
$QryTablePlanets    .= "`interceptor_misil` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`interplanetary_misil` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`metal_mine_porcent` int(11) NOT NULL default '10', ";
$QryTablePlanets    .= "`crystal_mine_porcent` int(11) NOT NULL default '10', ";
$QryTablePlanets    .= "`deuterium_sintetizer_porcent` int(11) NOT NULL default '10', ";
$QryTablePlanets    .= "`solar_plant_porcent` int(11) NOT NULL default '10', ";
$QryTablePlanets    .= "`fusion_plant_porcent` int(11) NOT NULL default '10', ";
$QryTablePlanets    .= "`solar_satelit_porcent` int(11) NOT NULL default '10', ";
$QryTablePlanets    .= "`mondbasis `TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`phalanx` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`sprungtor` TINYINT(3) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`last_jump_time` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`lune_noir` bigint(11) unsigned NOT NULL DEFAULT '0', ";
$QryTablePlanets    .= "`ev_transporter` bigint(11) unsigned NOT NULL DEFAULT '0', ";
$QryTablePlanets    .= "`star_crasher` bigint(11) unsigned NOT NULL DEFAULT '0', ";
$QryTablePlanets    .= "`giga_recykler` bigint(11) unsigned NOT NULL DEFAULT '0', ";
$QryTablePlanets    .= "`dm_ship` bigint(11) NOT NULL default '0', ";
$QryTablePlanets    .= "`der_metal` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`der_crystal` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`thriller` bigint(11) unsigned NOT NULL default '0', ";
$QryTablePlanets    .= "`id_luna` int(11) NOT NULL default '0', ";
$QryTablePlanets    .= "PRIMARY KEY  (`id`) ";
$QryTablePlanets    .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTablePlugins	.= "CREATE TABLE `prefix_".PLUGINS."` (";
$QryTablePlugins	.= "`status` tinyint(11) NOT NULL DEFAULT '0',";
$QryTablePlugins	.= "`plugin` varchar(32) NOT NULL";
$QryTablePlugins	.= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";


$QryTableRw          = "CREATE TABLE IF NOT EXISTS `prefix_".RW."` ( ";
$QryTableRw      	.= "`owners` VARCHAR(255) character set utf8 NOT NULL, ";
$QryTableRw         .= "`rid` VARCHAR(72) character set utf8 NOT NULL, ";
$QryTableRw         .= "`raport` text character set utf8 NOT NULL, ";
$QryTableRw         .= "`a_zestrzelona` tinyint(3) unsigned NOT NULL default '0', ";
$QryTableRw         .= "`time` int(10) unsigned NOT NULL default '0', ";
$QryTableRw         .= "UNIQUE KEY `rid` (`rid`), ";
$QryTableRw         .= "KEY `time` (`time`), ";
$QryTableRw         .= "FULLTEXT KEY `raport` (`raport`) ";
$QryTableRw         .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableStatPoints  = "CREATE TABLE IF NOT EXISTS `prefix_".STATPOINTS."` ( ";
$QryTableStatPoints .= "`id_owner` int(11) NOT NULL, ";
$QryTableStatPoints .= "`id_ally` int(11) NOT NULL, ";
$QryTableStatPoints .= "`stat_type` int(2) NOT NULL, ";
$QryTableStatPoints .= "`stat_code` int(11) NOT NULL, ";
$QryTableStatPoints .= "`tech_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`tech_old_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`tech_points` bigint(20) unsigned NOT NULL, ";
$QryTableStatPoints .= "`tech_count` int(11) NOT NULL, ";
$QryTableStatPoints .= "`build_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`build_old_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`build_points` bigint(20) unsigned NOT NULL, ";
$QryTableStatPoints .= "`build_count` int(11) NOT NULL, ";
$QryTableStatPoints .= "`defs_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`defs_old_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`defs_points` bigint(20) unsigned NOT NULL, ";
$QryTableStatPoints .= "`defs_count` int(11) NOT NULL, ";
$QryTableStatPoints .= "`fleet_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`fleet_old_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`fleet_points` bigint(20) unsigned NOT NULL, ";
$QryTableStatPoints .= "`fleet_count` int(11) NOT NULL, ";
$QryTableStatPoints .= "`total_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`total_old_rank` int(11) NOT NULL, ";
$QryTableStatPoints .= "`total_points` bigint(20) unsigned NOT NULL, ";
$QryTableStatPoints .= "`total_count` int(11) NOT NULL, ";
$QryTableStatPoints .= "`stat_date` int(11) NOT NULL, ";
$QryTableStatPoints .= "KEY `TECH` (`tech_points`), ";
$QryTableStatPoints .= "KEY `BUILDS` (`build_points`), ";
$QryTableStatPoints .= "KEY `DEFS` (`defs_points`), ";
$QryTableStatPoints .= "KEY `FLEET` (`fleet_points`), ";
$QryTableStatPoints .= "KEY `TOTAL` (`total_points`) ";
$QryTableStatPoints .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableSupp 		 = "CREATE TABLE IF NOT EXISTS `prefix_".SUPP."` (";
$QryTableSupp 		.= "`ID` int(11) NOT NULL auto_increment,";
$QryTableSupp 		.= "`player_id` int(11) NOT NULL,";
$QryTableSupp 		.= "`time` int(11) NOT NULL,";
$QryTableSupp 		.= "`subject` varchar(255) collate utf8_bin NOT NULL,";
$QryTableSupp 		.= "`text` text character set utf8 NOT NULL default '',";
$QryTableSupp 		.= "`status` int(1) NOT NULL,";
$QryTableSupp 		.= "PRIMARY KEY  (`ID`)";
$QryTableSupp 		.= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$QryTableTopKB 		 = "CREATE TABLE IF NOT EXISTS `prefix_".TOPKB."` (";
$QryTableTopKB 		.= "`id` int(11)  NOT NULL AUTO_INCREMENT,";
$QryTableTopKB 		.= "`id_owner1` tinyint(20) NOT NULL DEFAULT '0',";
$QryTableTopKB 		.= "`angreifer` varchar(64) NOT NULL DEFAULT '',";
$QryTableTopKB 		.= "`id_owner2` tinyint(20) NOT NULL DEFAULT '0',";
$QryTableTopKB 		.= "`defender` varchar(64) NOT NULL DEFAULT '',";
$QryTableTopKB 		.= "`gesamtunits` bigint(20) NOT NULL DEFAULT '0',";
$QryTableTopKB 		.= "`gesamttruemmer` bigint(20) NOT NULL DEFAULT '0',";
$QryTableTopKB 		.= "`rid` varchar(72) NOT NULL DEFAULT '',";
$QryTableTopKB 		.= "`raport` text NOT NULL,";
$QryTableTopKB 		.= "`fleetresult` varchar(64) NOT NULL DEFAULT '',";
$QryTableTopKB 		.= "`a_zestrzelona` tinyint(3) unsigned NOT NULL DEFAULT '0',";
$QryTableTopKB 		.= "`time` int(10) unsigned NOT NULL DEFAULT '0',";
$QryTableTopKB 		.= "PRIMARY KEY (`id`),";
$QryTableTopKB 		.= "KEY `id_owner1` (`id_owner1`,`rid`),";
$QryTableTopKB 		.= "KEY `id_owner2` (`id_owner2`,`rid`),";
$QryTableTopKB 		.= "KEY `time` (`time`),";
$QryTableTopKB 		.= "FULLTEXT KEY `raport` (`raport`)";
$QryTableTopKB 		.= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8;";
 
$QryTableUsers       = "CREATE TABLE IF NOT EXISTS `prefix_".USERS."` (";
$QryTableUsers      .= "`id` int(11) unsigned NOT NULL auto_increment,";
$QryTableUsers      .= "`username` varchar(64) character set utf8 NOT NULL default '',";
$QryTableUsers      .= "`password` varchar(64) character set utf8 NOT NULL default '',";
$QryTableUsers      .= "`email` varchar(64) character set utf8 NOT NULL default '',";
$QryTableUsers      .= "`email_2` varchar(64) character set utf8 NOT NULL default '',";
$QryTableUsers      .= "`authlevel` tinyint(4) NOT NULL default '0',";
$QryTableUsers      .= "`id_planet` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`galaxy` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`system` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`planet` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`current_planet` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`user_lastip` varchar(16) character set utf8 NOT NULL default '',";
$QryTableUsers      .= "`ip_at_reg` varchar(16) character set utf8 NOT NULL default '',";
$QryTableUsers      .= "`user_agent` text character set utf8 NOT NULL default '',";
$QryTableUsers      .= "`current_page` text character set utf8 NOT NULL default '',";
$QryTableUsers      .= "`register_time` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`onlinetime` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`dpath` varchar(255) character set utf8 NOT NULL default 'styles/skins/darkness/',";
$QryTableUsers      .= "`design` tinyint(4) NOT NULL default '1',";
$QryTableUsers      .= "`noipcheck` tinyint(4) NOT NULL default '1',";
$QryTableUsers      .= "`planet_sort` tinyint(1) NOT NULL default '0',";
$QryTableUsers      .= "`planet_sort_order` tinyint(1) NOT NULL default '0',";
$QryTableUsers      .= "`spio_anz` tinyint(2) NOT NULL default '1',";
$QryTableUsers      .= "`settings_tooltiptime` tinyint(1) NOT NULL default '5',";
$QryTableUsers      .= "`settings_fleetactions` tinyint(1) NOT NULL default '0',";
$QryTableUsers      .= "`settings_planetmenu` tinyint(1) NOT NULL default '1',";
$QryTableUsers      .= "`settings_esp` tinyint(1) NOT NULL default '1',";
$QryTableUsers      .= "`settings_wri` tinyint(1) NOT NULL default '1',";
$QryTableUsers      .= "`settings_bud` tinyint(1) NOT NULL default '1',";
$QryTableUsers      .= "`settings_mis` tinyint(1) NOT NULL default '1',";
$QryTableUsers      .= "`settings_rep` tinyint(1) NOT NULL default '0',";
$QryTableUsers      .= "`settings_tnstor` tinyint(1) NOT NULL default '1',";
$QryTableUsers      .= "`urlaubs_modus` tinyint(1) NOT NULL default '0',";
$QryTableUsers      .= "`urlaubs_until` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`db_deaktjava` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`new_message` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`fleet_shortcut` text character set utf8,";
$QryTableUsers      .= "`b_tech_planet` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`spy_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`computer_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`military_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`defence_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`shield_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`energy_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`hyperspace_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`combustion_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`impulse_motor_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`hyperspace_motor_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`laser_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`ionic_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`buster_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`intergalactic_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`expedition_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`metal_proc_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`crystal_proc_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`deuterium_proc_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`graviton_tech` TINYINT(3) unsigned NOT NULL default '0',";
$QryTableUsers      .= "`ally_id` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`ally_name` varchar(32) character set utf8 default '',";
$QryTableUsers      .= "`ally_request` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`ally_request_text` text character set utf8,";
$QryTableUsers      .= "`ally_register_time` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`ally_rank_id` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`current_luna` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_geologue` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_amiral` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_ingenieur` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_technocrate` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_espion` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_constructeur` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_scientifique` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_commandant` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_stockeur` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`darkmatter` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_defenseur` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_destructeur` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_general` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_bunker` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_raideur` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`rpg_empereur` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`bana` int(11) default NULL,";
$QryTableUsers      .= "`banaday` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`hof` int(1) NOT NULL default '1',";
$QryTableUsers      .= "`wons` bigint(20) NOT NULL default '0',";
$QryTableUsers      .= "`loos` bigint(20) NOT NULL default '0',";
$QryTableUsers      .= "`draws` bigint(20) NOT NULL default '0',";
$QryTableUsers      .= "`kbmetal` bigint(20) NOT NULL default '0',";
$QryTableUsers      .= "`kbcrystal` bigint(20) NOT NULL default '0',";
$QryTableUsers      .= "`lostunits` bigint(20) NOT NULL default '0',";
$QryTableUsers      .= "`desunits` bigint(20) NOT NULL default '0',";
$QryTableUsers      .= "`uctime` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`dm_attack` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`dm_defensive` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`dm_buildtime` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`dm_researchtime` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`dm_resource` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`dm_energie` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`dm_fleettime` int(11) NOT NULL default '0',";
$QryTableUsers      .= "`fb_id` int(11) NOT NULL default '0',";
$QryTableUsers      .= "PRIMARY KEY (`id`),";
$QryTableUsers      .= "UNIQUE KEY `username` (`username`),";
$QryTableUsers      .= "KEY `fb_id` (`fb_id`)";
$QryTableUsers      .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8;";

$QryTableUsersTemp   = "CREATE TABLE IF NOT EXISTS `prefix_".USERS_VALID."` (";
$QryTableUsersTemp  .= "`id` int(11) unsigned NOT NULL AUTO_INCREMENT,";
$QryTableUsersTemp  .= "`username` varchar(64) NOT NULL DEFAULT '',";
$QryTableUsersTemp  .= "`cle` varchar(30) NOT NULL,";
$QryTableUsersTemp  .= "`password` varchar(64) NOT NULL DEFAULT '',";
$QryTableUsersTemp  .= "`email` varchar(64) NOT NULL DEFAULT '',";
$QryTableUsersTemp  .= "`date` int(11) NOT NULL DEFAULT '0',";
$QryTableUsersTemp  .= "`planet` varchar(64) NOT NULL default 'Hauptplanet',";
$QryTableUsersTemp  .= "`ip` varchar(16) NOT NULL,";
$QryTableUsersTemp  .= "PRIMARY KEY (`id`)";
$QryTableUsersTemp  .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8;";
?>