<?php 

 
$apple_2 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_2->row,

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
    'liste_projet_reg_date',
    'liste_projet_color_1',
    'liste_projet_color_2',
    'liste_projet_name_font_size',
    'liste_projet_description1_font_size',
    'liste_projet_background_color'
    

    );
 
 
    $liste_projet_id_parent =  $liste_projet_id_sha1[0] ; 
 
    $apple_2->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_parent.'"   ORDER BY `liste_projet_id` ';

    

    
    $apple_2->execution();
   
    $myJSON = json_encode($apple_2->list_row); 

    
 

// Utilisation
 
// creation de la variable vide
$number = 0 ; 
// affectation valeur array 
// execution et ajout des element dans la nouvelle table 

$liste_projet_id_2 =$apple_2->add_array_element($number);
 
$number ++ ; 
$liste_projet_id_sha1_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_id_sha1_2) ; 
$number ++ ; 
$liste_projet_id_parent_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_id_parent_2) ; 
$number ++ ; 
$liste_projet_id_sha1_general_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_id_sha1_general_2) ; 
$number ++ ; 
$liste_projet_ip_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_ip_2) ; 
$number ++ ; 

$liste_projet_img_2=$apple_2->add_array_element($number);
//var_dump($liste_projet_img_2) ; 
$number ++ ; 
$liste_projet_name_2=$apple_2->add_array_element($number);
//var_dump($liste_projet_name_2) ; 
$number ++ ; 
$liste_projet_description1_2=$apple_2->add_array_element($number);
//var_dump($liste_projet_description1_2) ; 
$number ++ ; 
$liste_projet_description2_2=$apple_2->add_array_element($number);
//var_dump($liste_projet_description2_2) ; 
$number ++ ; 
$liste_projet_visibilite1_2=$apple_2->add_array_element($number);
//var_dump($liste_projet_visibilite1_2) ; 
 

 
$number ++ ; 
$liste_projet_visibilite2_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_visibilite2_2) ; 
$number ++ ; 
$liste_projet_type_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_type_2) ; 
$number ++ ; 
$information_user_id_sha1_2 =$apple_2->add_array_element($number);
//var_dump($information_user_id_sha1_2) ; 
$number ++ ; 
$liste_projet_new_file_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_new_file_2) ; 
$number ++ ; 
$liste_projet_reg_date_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_reg_date_2) ; 
$number ++ ; 








$liste_projet_color_1 =$apple_2->add_array_element($number);
//var_dump($liste_projet_reg_date_2) ; 
$number ++ ; 
$liste_projet_color_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_reg_date_2) ; 
$number ++ ; 






$liste_projet_name_font_size_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_reg_date_2) ; 
$number ++ ; 
$liste_projet_description1_font_size_2 =$apple_2->add_array_element($number);
//var_dump($liste_projet_reg_date_2) ; 
$number ++ ; 
 


$liste_projet_background_color_2 =$apple->add_array_element($number);
$number ++ ;

 








 
 
 
  
 
 


for($a= 0 ; $a < count($liste_projet_id) ; $a ++) {
   //  echo $liste_projet_id[$a]; 
     echo "<br/>" ; 
}


 



     


     
    ?>

 <?php 

 ?>