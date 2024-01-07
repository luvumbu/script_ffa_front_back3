<?php
session_start() ; 

include("../give_url.php"); 



$give_url= give_url() ;
include("../Select_datas.php") ; 
 
$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'get_club_nom_complet_array_2' 

    );
 
 
    $apple->sql='SELECT DISTINCT(`get_club_departement_array_2`) FROM `info_all_array` WHERE 1 ORDER BY `get_club_departement_array_2`';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);     
 
  echo   $myJSON ; 
 
  ?>