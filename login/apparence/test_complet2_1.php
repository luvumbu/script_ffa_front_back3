<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");

include("../../model/class/php/Select_datas.php") ;  
include("../../model/class/php/connexion.php") ;  


 

$PHP_SELF = strrev($_SERVER['PHP_SELF']) ; 

$url_page = "" ; 
 
for($i = 0  ; $i <strlen($_SERVER['PHP_SELF']) ; $i ++) {

//echo strrev($_SERVER['PHP_SELF'][$i]) ; 
 
 
if($PHP_SELF[$i]=="/"){
    break ; 
}
else {
 

    $url_page = $url_page.$PHP_SELF[$i] ; 
}

}


 
 



$url_page = strrev($url_page) ;




$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
    'liste_projet_id_parent',
    'liste_projet_id_sha1_general',
    'liste_projet_ip',
    'liste_projet_img',
    'liste_projet_name',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_visibilite1',
    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',
    'liste_projet_new_file',
    'liste_projet_reg_date'
    

    );
 
  
    $apple->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1`="'.$url_page.'"';

    //$apple->sql='SELECT * FROM `liste_projet` WHERE 1';

    $apple->execution();
    $myJSON = json_encode($apple->list_row); 


    $liste_projet_id_array=array();
    $liste_projet_id_sha1_array=array();
    $liste_projet_id_parent_array=array();
    $liste_projet_id_sha1_general_array=array();
    $liste_projet_ip_array=array();

    $liste_projet_img_array=array();


  
    $liste_projet_img_array_array=array();
    $liste_projet_img_array_rediff=array();
    $liste_projet_name_array=array();
    $liste_projet_description1_array=array();
    $liste_projet_description2_array=array();
    $liste_projet_visibilite1_array=array();
    
    $liste_projet_visibilite2_array=array();
    $liste_projet_type_array=array();
    $information_user_id_sha1_array=array();
    $liste_projet_new_file_array=array();
    $liste_projet_reg_date_array=array();

    $child_liste_projet_img_array_rediff  = array() ; 
    
    


if(count($apple->list_row)!=0){
     // echo   $myJSON ; 
    // $apple->all_data_json() ; 
   $SERVER_NAME =  $_SERVER['SERVER_NAME']; 
   $name_img =  $apple->list_row[12]."/".$apple->list_row[5] ;
 
   if($apple->list_row[4]=="127.0.0.1" || $apple->list_row[4]=="localhost" ){
       

       if($name_img !=""){
          $img_ = "http://".$apple->list_row[4]."/Model_Vue9/login/pages_on/download_img/uploads/".$name_img ; 
        array_push($liste_projet_img_array_array, $img_ );
       }
       else {
        $img_ = ""; 
        array_push($liste_projet_img_array_array, $img_ );
       }

   }
   else {



    if($name_img !=""){
      $img_ = "http://".$apple->list_row[4]."/login/pages_on/download_img/uploads/".$name_img ; 
    array_push($liste_projet_img_array_array, $img_ );
   }
   else {
    $img_ = ""; 
    array_push($liste_projet_img_array_array, $img_ );
   }
   }
 
 
 


//echo(fmod(4, 3) . "<br>");

 

 

 
 
$number = 0 ; 

$liste_projet_id_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_id_parent_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_id_sha1_general_array =$apple->add_array_element($number);
$number ++ ; 

$liste_projet_ip_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_img_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_name_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_description1_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_description2_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_visibilite1_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_visibilite2_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_type_array =$apple->add_array_element($number);
$number ++ ; 

$information_user_id_sha1_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_new_file_array =$apple->add_array_element($number);
$number ++ ; 
$liste_projet_reg_date_array =$apple->add_array_element($number);

 

  }
  $child_apple2 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $child_apple2->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
    'liste_projet_id_parent',
    'liste_projet_id_sha1_general',
    'liste_projet_ip',
    'liste_projet_img',
    'liste_projet_name',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_visibilite1',
    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',
    'liste_projet_new_file',
    'liste_projet_reg_date'
    

    );
 
    $id_information_user_sha1 =$_SESSION["information_user_id_sha1"] ; 
    $child_apple2->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent`="'.$url_page.'"';

    $child_apple2->execution();
    $myJSON = json_encode($child_apple2->list_row); 

    // echo   $myJSON ; 
 
  //echo   $child_apple2->all_data_json() ; 















  // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


  if(count($child_apple2->list_row)!=0){
 
 
    // echo   $myJSON ; 
 
   // $child_apple2->all_data_json() ; 



   






 
 
 
   $SERVER_NAME =  $_SERVER['SERVER_NAME']; 
   $name_img =  $child_apple2->list_row[12]."/".$child_apple2->list_row[5] ;
 
   if($child_apple2->list_row[4]=="127.0.0.1" || $child_apple2->list_row[4]=="localhost" ){
       

       if($name_img !=""){
          $img_ = "http://".$child_apple2->list_row[4]."/Model_Vue9/login/pages_on/download_img/uploads/".$name_img ; 
 
 
        array_push($child_liste_projet_img_array_rediff, $img_ );
       }
       else {
        $img_ = "" ; 
 
        array_push($child_liste_projet_img_array_rediff, $img_ );
       }
 


   }
   else {



    if($name_img !=""){
      $img_ = "http://".$child_apple2->list_row[4]."/login/pages_on/download_img/uploads/".$name_img ; 
 

    array_push($child_liste_projet_img_array_rediff, $img_ );
   }
   else {
    $img_ = "" ; 
  
    array_push($child_liste_projet_img_array_rediff, $img_ );
   }
 

   }
 
 
 


//echo(fmod(4, 3) . "<br>");

 

 

 
 
$child_number = 0 ; 

$child_liste_projet_id_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_id_sha1_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_id_parent_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_id_sha1_general_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 

$child_liste_projet_ip_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_img_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_name_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_description1_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 

$child_liste_projet_description2_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_visibilite1_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_visibilite2_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_type_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 

$child_information_user_id_sha1_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 
$child_liste_projet_new_file_array =$child_apple2->add_array_element($child_number);
$child_number ++ ; 

$child_liste_projet_reg_date_array =$child_apple2->add_array_element($child_number);



 


  }


  




  














  /*
    $liste_projet_id_array=array();
    $liste_projet_id_sha1_array=array();
    $liste_projet_id_parent_array=array();
    $liste_projet_id_sha1_general_array=array();
    $liste_projet_ip_array=array();

    $liste_projet_img_array=array();
    $liste_projet_img_array_array=array();
    $liste_projet_img_array_rediff=array();
    $liste_projet_name_array=array();
    $liste_projet_description1_array=array();
    $liste_projet_description2_array=array();
    $liste_projet_visibilite1_array=array();
    
    $liste_projet_visibilite2_array=array();
    $liste_projet_type_array=array();
    $information_user_id_sha1_array=array();
    $liste_projet_new_file_array=array();
    $liste_projet_reg_date_array=array();

    //!!!!!!!!!!!!!

    

  $child_liste_projet_id_array = array() ; 
  $child_liste_projet_id_sha1_array = array() ; 
  $child_liste_projet_id_parent_array = array() ; 
  $child_liste_projet_id_sha1_general_array = array() ; 
  
  
  $child_liste_projet_ip_array = array() ; 
  
  $child_liste_projet_img_array = array() ; 
  $liste_projet_img_array_rediff = array() ; 
  $child_liste_projet_name_array = array() ; 
  $child_liste_projet_description1_array = array() ; 
  
  $child_liste_projet_description2_array = array() ; 
  $child_liste_projet_visibilite1_array = array() ; 
  $child_liste_projet_visibilite2_array = array() ; 
  $child_liste_projet_type_array = array() ; 
  
  $child_information_user_id_sha1_array = array() ; 
  $child_liste_projet_new_file_array = array() ; 
  
  $child_liste_projet_reg_date_array = array() ; 

*/
?>



 
</body>
</html>
