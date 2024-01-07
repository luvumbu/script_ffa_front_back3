<?php
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
  $child_liste_projet_img_array_array = array() ; 
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
 
 

 


/*




if(count($child_apple2->list_row)!=0){

 



 



for($o = 0 ; $o< count($child_liste_projet_id_array) ; $o ++){

 

?>
<div class="no_visible child_liste_projet_id_array"><?php echo $child_liste_projet_id_array[$o] ?></div>
<div class="no_visible child_liste_projet_id_sha1_array"><?php echo $child_liste_projet_id_sha1_array[$o] ?></div>
<div class="no_visible child_liste_projet_id_parent_array"><?php echo $child_liste_projet_id_parent_array[$o] ?></div>
<div class="no_visible child_liste_projet_id_sha1_general_array"><?php echo $child_liste_projet_id_sha1_general_array[$o] ?></div>
<div class="no_visible child_liste_projet_ip_array"><?php echo $child_liste_projet_ip_array[$o] ?></div>

<div class="no_visible child_liste_projet_img_array"><?php echo $child_liste_projet_img_array[$o] ?></div>
<div class="no_visible child_liste_projet_name_array"><?php echo $child_liste_projet_name_array[$o] ?></div>
<div class="no_visible child_liste_projet_description1_array"><?php echo $child_liste_projet_description1_array[$o] ?></div>
<div class="no_visible child_liste_projet_description2_array"><?php echo $child_liste_projet_description2_array[$o] ?></div>

<div class="no_visible child_liste_projet_visibilite1_array"><?php echo $child_liste_projet_visibilite1_array[$o] ?></div>
<div class="no_visible child_liste_projet_visibilite2_array"><?php echo $child_liste_projet_visibilite2_array[$o] ?></div>
<div class="no_visible child_liste_projet_type_array"><?php echo $child_liste_projet_type_array[$o] ?></div>
<div class="no_visible child_information_user_id_sha1_array"><?php echo $child_information_user_id_sha1_array[$o] ?></div>
<div class="no_visible child_liste_projet_new_file_array"><?php echo $child_liste_projet_new_file_array[$o] ?></div>

<div class="no_visible child_liste_projet_reg_date_array"><?php echo $child_liste_projet_reg_date_array[$o] ?></div>

<div>
  <?php echo $liste_projet_img_array_rediff ?> 
</div>
 
<?php 

}
}


*/


 

 

if(count($apple->list_row)==0){
  ?>
 

<img src="https://www.shutterstock.com/image-vector/error-404-matrix-design-stream-260nw-475238002.jpg" alt="" srcset="" class="no_visible e404">
<?php 
}

else {

  //echo  count($liste_projet_id_array) ; 


  for($i = 0 ; $i<count($liste_projet_id_array) ; $i ++) {


?>

 
<div class="no_visible information_user_id_sha1_array"><?php echo $information_user_id_sha1_array[$i] ?></div>
 

<div class="no_visible liste_projet_id_array"><?php echo $liste_projet_id_array[$i] ?></div>
<div class="no_visible liste_projet_id_sha1_array"><?php echo $liste_projet_id_sha1_array[$i] ?></div>
<div class="no_visible liste_projet_id_parent_array"><?php echo $liste_projet_id_parent_array[$i] ?></div>
<div class="no_visible liste_projet_id_sha1_general_array"><?php echo $liste_projet_id_sha1_general_array[$i] ?></div>
<div class="no_visible liste_projet_ip_array"><?php echo $liste_projet_ip_array[$i] ?></div>

<div class="no_visible liste_projet_img_array"><?php echo $liste_projet_img_array[$i] ?></div>
<div class="no_visible liste_projet_img_array_array"><?php echo $liste_projet_img_array_array[$i] ?></div>
<div class="no_visible liste_projet_name_array"><?php echo $liste_projet_name_array[$i] ?></div>
<div class="no_visible liste_projet_description1_array"><?php echo $liste_projet_description1_array[$i] ?></div>
<div class="no_visible liste_projet_description2_array"><?php echo $liste_projet_description2_array[$i] ?></div>

<div class="no_visible liste_projet_visibilite1_array"><?php echo $liste_projet_visibilite1_array[$i] ?></div>
<div class="no_visible liste_projet_visibilite2_array"><?php echo $liste_projet_visibilite2_array[$i] ?></div>
<div class="no_visible liste_projet_type_array"><?php echo $liste_projet_type_array[$i] ?></div>

<div class="no_visible liste_projet_new_file_array"><?php echo $liste_projet_new_file_array[$i] ?></div>

<div class="no_visible liste_projet_reg_date_array"><?php echo $liste_projet_reg_date_array[$i] ?></div>
 


<?php 
  }
  /*
var_dump($liste_projet_id_array) ; 
var_dump($liste_projet_id_sha1_array) ; 
var_dump($liste_projet_id_parent_array) ; 
var_dump($liste_projet_id_sha1_general_array) ; 
var_dump($liste_projet_ip_array) ; 

var_dump($liste_projet_img_array) ; 
var_dump($liste_projet_img_array_array) ; 
 
var_dump($liste_projet_name_array) ; 
var_dump($liste_projet_description1_array) ; 

var_dump($liste_projet_description2_array) ; 
var_dump($liste_projet_visibilite1_array) ; 
var_dump($liste_projet_visibilite2_array) ; 
var_dump($liste_projet_type_array) ; 
var_dump($information_user_id_sha1_array) ; 

var_dump($liste_projet_new_file_array) ; 
var_dump($liste_projet_reg_date_array) ; 

 
 */



 

if(count($child_apple2->list_row)!=0){
 

 /*
var_dump($child_liste_projet_id_array) ; 
var_dump($child_liste_projet_id_sha1_array) ; 
var_dump($child_liste_projet_id_parent_array) ; 
var_dump($child_liste_projet_id_sha1_general_array) ; 
var_dump($child_liste_projet_ip_array) ; 
 
var_dump($child_liste_projet_img_array_rediff ) ;  
 

var_dump($child_liste_projet_name_array) ; 
var_dump($child_liste_projet_description1_array) ; 
var_dump($child_liste_projet_description2_array) ; 

var_dump($child_liste_projet_visibilite1_array) ; 
var_dump($child_liste_projet_visibilite2_array) ; 
var_dump($child_liste_projet_type_array) ; 
var_dump($child_information_user_id_sha1_array) ; 
var_dump($child_liste_projet_new_file_array) ; 

var_dump($child_liste_projet_reg_date_array) ; 


*/

 
  for($i = 0 ; $i<count($child_liste_projet_id_array) ; $i ++) {
 
 

?>
 



<div class="no_visible child_information_user_id_sha1_array"><?php echo $child_information_user_id_sha1_array[$i] ?></div>
<div class="no_visible child_liste_projet_id_array"><?php echo $child_liste_projet_id_array[$i] ?></div>
<div class="no_visible child_liste_projet_id_sha1_array"><?php echo $child_liste_projet_id_sha1_array[$i] ?></div>
<div class="no_visible child_liste_projet_id_parent_array"><?php echo $child_liste_projet_id_parent_array[$i] ?></div>
<div class="no_visible child_liste_projet_id_sha1_general_array"><?php echo $child_liste_projet_id_sha1_general_array[$i] ?></div>
<div class="no_visible child_liste_projet_ip_array"><?php echo $child_liste_projet_ip_array[$i] ?></div>
 
<div class="no_visible child_liste_projet_name_array"><?php echo $child_liste_projet_name_array[$i] ?></div>
<div class="no_visible child_liste_projet_description1_array"><?php echo $child_liste_projet_description1_array[$i] ?></div>
<div class="no_visible child_liste_projet_description2_array"><?php echo $child_liste_projet_description2_array[$i] ?></div>
<div class="no_visible child_liste_projet_visibilite1_array"><?php echo $child_liste_projet_visibilite1_array[$i] ?></div>
<div class="no_visible child_liste_projet_visibilite2_array"><?php echo $child_liste_projet_visibilite2_array[$i] ?></div>


<div class="no_visible child_liste_projet_type_array"><?php echo $child_liste_projet_type_array[$i] ?></div>
<div class="no_visible child_liste_projet_new_file_array"><?php echo $child_liste_projet_new_file_array[$i] ?></div>

<div class="no_visible child_liste_projet_img_array"><?php echo $child_liste_projet_img_array[$i] ?></div>

 
<div class="no_visible child_liste_projet_reg_date_array"><?php echo $child_liste_projet_reg_date_array[$i] ?></div>
 
 
 
 


<?php 
  }



 
 
}




}
?>

<style>
  .e404{
    width:100% ; 
  }
  body {
    margin:0;
    padding : 0 ; 
  }
  .no_visible{
 
  }
</style>

