<?php
session_start() ; 

include("../give_url.php"); 



$give_url= give_url() ;
include("../Select_datas.php") ; 
 
$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'get_epreuve_nom_complet' 

    );
 
 
    $apple->sql='SELECT * FROM `info_all_array` WHERE `get_epreuve_nom_complet`="'.$give_url.'"';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);     
 
  echo   $myJSON ; 
 
  ?>