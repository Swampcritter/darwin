-- MySQL dump 9.09
--
-- Host: localhost    Database: darwin
-- ------------------------------------------------------
-- Server version	4.0.16

--
-- Table structure for table `darwin`
--

CREATE TABLE darwin (
  proj_name varchar(255) default NULL,
  proj_acronym varchar(10) NOT NULL default '',
  proj_description mediumtext,
  proj_status varchar(15) default NULL,
  proj_implemented_date varchar(15) default NULL,
  proj_data_department varchar(50) default NULL,
  proj_vp_contact varchar(50) default NULL,
  proj_director_contact varchar(50) default NULL,
  proj_tech_contact varchar(50) default NULL,
  proj_support_contact varchar(50) default NULL,
  proj_hardware_mainframe varchar(255) default NULL,
  proj_hardware_midrange varchar(255) default NULL,
  proj_hardware_desktop varchar(255) default NULL,
  proj_software_prog_lang varchar(255) default NULL,
  proj_software_database varchar(255) default NULL,
  proj_software_middleware varchar(255) default NULL,
  proj_software_webservice varchar(255) default NULL,
  proj_software_misctools varchar(255) default NULL,
  proj_interface_inbound varchar(255) default NULL,
  proj_interface_outbound varchar(255) default NULL,
  proj_interface_middleware varchar(255) default NULL,
  proj_interface_type varchar(255) default NULL,
  proj_hardware_vendor_name varchar(255) default NULL,
  proj_hardware_vendor_address varchar(255) default NULL,
  proj_hardware_vendor_city varchar(255) default NULL,
  proj_hardware_vendor_state varchar(255) default NULL,
  proj_hardware_vendor_zipcode varchar(15) default NULL,
  proj_hardware_vendor_phone varchar(15) default NULL,
  proj_software_vendor_name varchar(255) default NULL,
  proj_software_vendor_address varchar(255) default NULL,
  proj_software_vendor_city varchar(255) default NULL,
  proj_software_vendor_state varchar(255) default NULL,
  proj_software_vendor_zipcode varchar(15) default NULL,
  proj_software_vendor_phone varchar(15) default NULL,
  PRIMARY KEY  (proj_acronym),
  UNIQUE KEY id (proj_acronym)
) TYPE=MyISAM;

--
-- Dumping data for table `darwin`
--

INSERT INTO darwin VALUES ('Data Asset Resource Web Interface','DARWIN','DARWIN is a combination of an asset, vendor and license management web-based application. It is built entirely within the MySQL and PHP environment.','Active','07-20-2004','OPEN','John Doe','Jane Doe','Michael Doe','John Doe',NULL,'Windows 2000','Web Interface','PHP','MySQL, Oracle',NULL,'Apache, PHP',NULL,'Web Form','PHP','PHP','Real-Time',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

