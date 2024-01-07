<?php 


include("../model/class/php/Select_datas.php") ;  
include("../model/class/php/connexion.php") ;  
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
    'liste_projet_reg_date',
    'liste_projet_color_1',
    'liste_projet_color_2',
    'liste_projet_name_font_size',
    'liste_projet_description1_font_size',
    'liste_projet_background_color'
    

    );
 
    $id_information_user_sha1 =$_SESSION["information_user_id_sha1"] ; 
 
    $apple->sql='SELECT * FROM `liste_projet` WHERE `information_user_id_sha1` ="'.$id_information_user_sha1.'" AND `liste_projet_id_parent` ="" ORDER BY `liste_projet_id` ';
 

    
    $apple->execution();
    $myJSON = json_encode($apple->list_row); 

   
 
  
     $b=array();



     $liste_projet_id = array() ; 
     $liste_projet_id_sha1 = array() ; 
     $liste_projet_id_parent = array() ; 
     $liste_projet_id_sha1_general = array() ; 
     $liste_projet_ip = array() ; 

     $liste_projet_img = array() ; 
     $liste_projet_name = array() ; 
     $liste_projet_description1 = array() ; 
     $liste_projet_description2 = array() ; 
     $liste_projet_visibilite1 = array() ; 

     $liste_projet_visibilite2 = array() ; 
     $liste_projet_type = array() ; 
     $information_user_id_sha1 = array() ; 
     $liste_projet_new_file = array() ; 
     $liste_projet_reg_date = array() ; 















     // creation de la variable vide
     $number = 0 ; 
     // affectation valeur array 
     // execution et ajout des element dans la nouvelle table 
     
     $liste_projet_id =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_id_sha1 =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_id_parent =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_id_sha1_general =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_ip =$apple->add_array_element($number);
     $number ++ ; 

     $liste_projet_img =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_name =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_description1 =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_description2 =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_visibilite1 =$apple->add_array_element($number);
     $number ++ ; 

     $liste_projet_visibilite2 =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_type =$apple->add_array_element($number);
     $number ++ ; 
     $information_user_id_sha1 =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_new_file =$apple->add_array_element($number);
     $number ++ ; 
     $liste_projet_reg_date =$apple->add_array_element($number);
     $number ++ ;





     $liste_projet_color_1 =$apple->add_array_element($number);
     $number ++ ;
     $liste_projet_color_2 =$apple->add_array_element($number);
     $number ++ ;



     $liste_projet_name_font_size =$apple->add_array_element($number);
     $number ++ ;
     $liste_projet_description1_font_size =$apple->add_array_element($number);
     $number ++ ;

     $liste_projet_background_color =$apple->add_array_element($number);
     $number ++ ;




     


/*
     var_dump($liste_projet_id) ; 
     var_dump($liste_projet_id_sha1) ; 
     var_dump($liste_projet_id_parent) ; 
     var_dump($liste_projet_id_sha1_general) ; 
     var_dump($liste_projet_ip) ; 
     var_dump($liste_projet_img) ; 
     var_dump($liste_projet_name) ; 
     var_dump($liste_projet_description1) ; 
     var_dump($liste_projet_description2) ; 
     var_dump($liste_projet_visibilite1) ; 
     var_dump($liste_projet_visibilite2) ; 
     var_dump($liste_projet_type) ; 
     var_dump($information_user_id_sha1) ; 
     var_dump($liste_projet_new_file) ; 
     var_dump($liste_projet_reg_date) ; 
*/



     


     
    ?>
 