<?php
session_start() ; 

include("../give_url.php"); 



$give_url= give_url() ;
include("../Select_datas.php") ; 
 
$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'get_emplacement',		
    'get_rp_array_2',		
    'get_vent_array_2',		
    'get_result_users_perf_array_2',		
    'get_result_users_nom_1_array_2',		
    'get_result_users_nom_2_array_2',		
    'get_result_users_nom_3_array_2',		
    'get_result_users_nom_4_array_2',		
    'get_users_nationality_array_2',		
    'get_club_nom_complet_array_2',		
    'get_club_departement_array_2',		
    'get_club_region_array_2',		
    'get_cat_array_2',		
    'get_users_naissance_array_2',		
    'get_result_date_perf_array_2',		
    'get_result_villes_nom_array_2',		
    'epreuve_sex_array_2',		
    'get_users_nom_complet_array',		
    'info_all_array_click',		
    'info_all_array_ip',		
    'info_all_array_src_name',		
    'window_location_href',	
    'get_epreuve_nom_complet'	

    );
 
 
    $apple->sql='SELECT * FROM `info_all_array` WHERE `get_result_users_nom_3_array_2`="'.$give_url.'"';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);     
 
  echo   $myJSON ; 
 
  ?>