-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: fitbit
-- ------------------------------------------------------
-- Server version	5.5.24-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping events for database 'fitbit'
--

--
-- Dumping routines for database 'fitbit'
--
/*!50003 DROP PROCEDURE IF EXISTS `SP_LLENAR_BD` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LLENAR_BD`(IN v_n_registros INT)
BEGIN
	-- hrzones vars
	declare v_name_hrzones varchar(45);
    declare v_hrmax_hrzones varchar(45);
    
    -- activities vars
    declare v_name_activities varchar(45);
    declare v_cals_activities int;
    
    -- profiles vars
    declare v_name_profiles varchar(45);
    declare v_bithday_profiles DATE;
    declare v_alture_profiles int;
    declare v_weight_profiles int;
    declare v_gender_profiles varchar(45) default 'male';
    declare v_bpm_lower_limit_prof int;
    declare v_bpm_upper_limit_prof int;
    
    -- heart rates vars
    declare v_bpm_hrates int;
    declare v_total_cals_hrates int;
    
    
    -- v_last_registro
    declare i int default 1;
    LOOP1 : LOOP
		-- hrzones insert
        set v_name_hrzones = concat('hrzones_name ',i);
        set v_hrmax_hrzones = concat('test_hrmax ',i);
	
		insert into hrzones (name, hrMax)
        values (v_name_hrzones, v_hrmax_hrzones);
        
        -- activities insert
        set v_name_activities = concat('activity ',i);
		SELECT FLOOR(1000 + (RAND() * 50000)) INTO v_cals_activities;
        insert into activities (name, cals)
        values (v_name_activities, v_cals_activities);
        
        -- profiles insert
        set v_name_profiles = concat('profile ',i);
		set v_bithday_profiles = '0000-00-00';
		SELECT FLOOR(120 + (RAND() * 90)) INTO v_alture_profiles;
		SELECT FLOOR(120 + (RAND() * 180)) INTO v_weight_profiles;
        if	v_gender_profiles = 'female' then
			set v_gender_profiles = 'male';
        else
			set v_gender_profiles = 'female';
        end if;
		SELECT FLOOR(500 + (RAND() * 1000)) INTO v_bpm_lower_limit_prof;
		SELECT FLOOR(1600 + (RAND() * 15000)) INTO v_bpm_upper_limit_prof;
        
        insert into profiles (name, bithday, altura, weight, gender, bpmLowerLimit, bpmUpperLimit)
        values (v_name_profiles, v_bithday_profiles, v_alture_profiles, v_weight_profiles, v_gender_profiles, v_bpm_lower_limit_prof, v_bpm_upper_limit_prof);

		-- insert heartrates
		SELECT FLOOR(500 + (RAND() * 3000)) INTO v_bpm_hrates;
		SELECT FLOOR(2321 + (RAND() * 50000)) INTO v_total_cals_hrates;
        insert into heart_rates (profile_id, bpm, hrZone_id, activity_id, totalCals)
        values (i, v_bpm_hrates, i, i, v_total_cals_hrates);
        
        set i = i + 1;
		if i = v_n_registros then
			leave LOOP1;
        end if;
    END LOOP LOOP1;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-29  5:06:03
