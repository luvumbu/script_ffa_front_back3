<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
 
      $t = time(date_default_timezone_set('Europe/Paris')) ; 
      $tiempo = date("Y-m-d",$t);


   $SERVER_NAME =   $_SERVER['SERVER_NAME'];
 $liste_projet_id_parent = $_POST["liste_projet_id_parent"] ; 
 $time = $_POST["time"] ; 

  



        $apple = new Insertion_Bdd(
          $servername,
          $username,
          $password,
          $dbname
          
          );
              
         
          $apple->set_msg_valudation("inserttion ok ") ;  
          $apple->set_sql("INSERT INTO liste_projet (liste_projet_id_sha1,liste_projet_id_parent,liste_projet_ip)
                  
          VALUES ('$time','$liste_projet_id_parent','$SERVER_NAME')") ; 
          $apple->execution() ;
        
?>