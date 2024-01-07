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
 
  
    //$apple->sql='SELECT * FROM `liste_projet` WHERE `information_user_id_sha1`="'.$id_information_user_sha1.'"ORDER BY `liste_projet_id` ';
    $apple->sql='SELECT * FROM `liste_projet` WHERE 1';

    $apple->execution();
    $myJSON = json_encode($apple->list_row); 

    // echo   $myJSON ; 
 
   // $apple->all_data_json() ; 
   $SERVER_NAME =  $_SERVER['SERVER_NAME']; 

   $name_img =  $apple->list_row[12]."/".$apple->list_row[5] ;


 

  

 
   if($apple->list_row[4]=="127.0.0.1" || $apple->list_row[4]=="localhost" ){
       $img_ = "http://".$apple->list_row[4]."/Model_Vue9/login/pages_on/download_img/uploads/".$name_img ; 

   }
   else {
    $img_ = "http://".$apple->list_row[4]."/login/pages_on/download_img/uploads/".$name_img ; 
   }
 ?>









<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5  text-center">
  <h1 class="liste_projet_name"><?php echo $apple->list_row[6] ?></h1>
 </div>
  
<div class="container mt-5">
  <div class="row">
    

        <?php 


                        if($apple->list_row[5]!=""){
?>

<div class="all_img" style="background-image: url('<?php echo $img_ ; ?>')" >
                
                </div>
<?php 
                        }
      ?>
    
        
 
      <p class="liste_projet_description1"><?php echo $apple->list_row[7] ?></p>

      <p class="liste_projet_description2"></p>
      <p class="liste_projet_reg_date"><?php echo $apple->list_row[14] ?></p>
      <div>
   <a href="../../"> Page précedente</a>
 </div>

      

   
    
 
  </div>
</div>
<?php 

 
 


//echo(fmod(4, 3) . "<br>");

 

 
$liste_projet_id_array=array();
$liste_projet_id_sha1_array=array();
$liste_projet_id_parent_array=array();
$liste_projet_id_sha1_general_array=array();
$liste_projet_ip_array=array();
$liste_projet_img_array=array();
$liste_projet_name_array=array();
$liste_projet_description1_array=array();
$liste_projet_description2_array=array();
$liste_projet_visibilite1_array=array();

$liste_projet_visibilite2_array=array();
$liste_projet_type_array=array();
$information_user_id_sha1_array=array();
$liste_projet_new_file_array=array();
$liste_projet_reg_date_array=array();
 






















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



 
 var_dump($liste_projet_id_array) ; 


//cho fmod(1,count($apple->list_row) ) ; 


//echo $apple->list_row[0] ; 



//echo count($apple->row) ;

?>



<style>
    .all_img{
        width:100% ; 
        height:200px; 

        background-image:url("http://localhost/Model_Vue9/login/pages_on/download_img/uploads/c112c7a30173389dda190c15548adcfb5581ad23/1699078738741.png") ; 
        
        background-image:url("1698944862875.png") ; 
        
        background-size:100% ; 
       
    }
    .liste_projet_description1{
      margin-top:150px ; 
    }
</style>
</body>
</html>
