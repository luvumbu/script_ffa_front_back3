 
<?php 

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
 
 













 
 
 
  

  
 
      
 




      



 

<?php 

 
 



$nombre_total_element = count($apple->list_row)/ count($apple->row) ; 

 


 
 

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



 echo '<div class="space_display_1">' ;

 
for($a = 0 ; $a< $nombre_total_element; $a ++) {
  echo "<br/>" ; 

 
  ?>

<div class="class_1" id="<?php echo "parent_".$liste_projet_id_sha1[$a] ?>">

 
<?php

 
if($liste_projet_img[$a]!=""){
$src_img__="redirection_dowload_img/".$liste_projet_img[$a] ; 

  ?>
<div class="div_images cursor_pointer" onclick="redirection_dowload_img(this)" style="background-image: url('<?php echo $src_img__ ; ?>')" title="<?php echo $liste_projet_id_sha1[$a] ?>"></div>  


  <?php 
}
else {
    ?>
    <div class="div_images" onclick="redirection_dowload_img(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>"></div>  

    <?php 
}
?>
   
        <h4 class="liste_projet_name">
          
      <input type="text" onkeyup="update_all_php(this)" id="<?php echo "input_".$liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>" value="<?php echo $liste_projet_name[$a] ?>"  class="liste_projet_name_input">
        </h4>       
     
        <textarea onkeyup="update_all_php(this)" id="<?php echo "textarea_".$liste_projet_id_sha1[$a] ?>" title="<?php echo $liste_projet_id_sha1[$a] ?>" class="liste_projet_description1_textarea"><?php echo $liste_projet_description1[$a] ?></textarea>
        <br/>

        <?php 
              if($liste_projet_visibilite1[$a]==""){
                       ?>
                       
                   
                       <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>"  onclick="visibility(this)" title="<?php echo $liste_projet_id_sha1[$a] ; ?>" width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible"/>
                       <?php 
              }
              else {
?>
 <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>"  onclick="visibility(this)" title="<?php echo $liste_projet_id_sha1[$a] ; ?>" width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/visible--v1.png" alt="invisible"/>

<?php
              }
        ?>

        <a  href="<?php echo "blog/pages.php/".$liste_projet_id_sha1[$a] ?>">
        <img class="format_toogle" title="<?php echo $liste_projet_id_sha1[$a] ?>"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/link--v1.png" alt="link--v1"/>

        </a>
      
      <?php 

            if($nombre_total_element==1){
  
            }



            if($element_edit){
?>

<img class="format_toogle" width="50" height="50" onclick="element_edit(this)" src="https://img.icons8.com/windows/50/edit--v1.png" title="<?php echo $liste_projet_id_sha1[$a] ?>" alt="edit--v1"/>

<?php 
            }
      ?>

          <img class="format_toogle" onclick="remove_all(this)" title="<?php echo $liste_projet_id_sha1[$a] ?>"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/delete-forever.png" alt="delete-forever"/>
     
     
     
          </div>
    
<?php 
}




 ?>


 

    
</div>


 
 <script>
  function update_all_php(_this){


    var input_ = document.getElementById("input_"+_this.title);
    var textarea_ = document.getElementById("textarea_"+_this.title);
 
 
var ok = new Information("class/php/php_update/update_all.php"); // création de la classe 
ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
ok.add("liste_projet_name", input_.value); // ajout de l'information pour lenvoi 
ok.add("liste_projet_description1", textarea_.value); // ajout de l'information pour lenvoi 

 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 




  }
var img_1 = "https://img.icons8.com/ios-glyphs/50/visible--v1.png" ; 
var img_2 = "https://img.icons8.com/ios-glyphs/50/invisible.png" ; 
var img_3 = "https://img.icons8.com/ios-glyphs/50/link--v1.png" ; 
var img_4 = "https://img.icons8.com/ios-glyphs/50/delete-forever.png" ; 
var liste_projet_visibilite1 = "" ; 
  function visibility(_this){
    console.log(_this.src) ; 

    if(_this.src==img_2){
      _this.src=img_1; 
      liste_projet_visibilite1 = "(OO)" ;
    }
    else {
      _this.src=img_2; 
   

    }


 
var ok = new Information("class/php/php_update/visibility.php"); // création de la classe 
ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi 
ok.add("liste_projet_visibilite1", liste_projet_visibilite1); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 




  }
 </script>
<style>
  .format_toogle{
    padding:10px; 
    margin:10px;
    background-color:rgba(0,0,0,0.1) ; 
    border:1px solid rgba(0,0,0,0.2) ; 
    transition:1s all ; 
  }
  .format_toogle:hover{
    cursor:pointer ; 
    transition:1s all ; 
    background-color:rgba(120,0,0,0.1) ; 
    border:1px solid rgba(120,0,0,0.2) ; 

  }
  .liste_projet_description1_textarea{
        border:1px solid rgba(0,0,0,0.1);
    width:80% ;
    padding-bottom:15px;  
    border-bottom:1px solid rgba(0,0,0,0.4);
  }
  .liste_projet_name_input{
    border:1px solid rgba(0,0,0,0.1);


    border-bottom:1px solid rgba(0,0,0,0.4);
    width:100%; 
  }
    .pages_x{
        width:50%;
        margin:auto ; 
    }
  .liste_projet_name,.liste_projet_description1{
    margin:20px; 
    padding:25px; 
  }
  .terminer{
    background-color:rgba(130,0,0,0.5); 
    width:100px; 
    color:white ; 

    text-align:center ; 
    border-radius :15px;
  }
 
  .class_1{
    border:1px solid rgba(0,0,0,0.3) ; 
 
    width:302px; 
    text-align:center ; 
    margin:200px; 
    margin-bottom:50px ; 
  }
    .div_images{
        width:299px;
        height:299px ; 
        
         
        background-image:url("data:image/jpeg;base64,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");
        background-size:100%; 
    }
    .space_display{
 
display:flex; 
justify-content:center ; 
flex-wrap:wrap ;  
margin-top:150px; 

    }
  
    .padding_el{
 
    
    }
    .green{
      background-color:green ; 
    }
    .test_1{
      display:flex;
      justify-content:space-around ; 
    }
</style>

<script>
  function terminer(){
    var ok = new Information("class/php/php_select_data/terminer.php"); // création de la classe 
 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

    location.reload() ; 


  }
  function remove_all(_this){
    var ok = new Information("class/php/php_remove/remove_all.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

    document.getElementById("parent_"+_this.title).style.display="none";
    
  }


  function add_element(_this){
   
 
 
 

var liste_projet_id_parent =  _this.title ; 

 const d = new Date();
time = d.getTime();





const x = setTimeout(oui_ok, 50);


document.cookie = "username="+time;
var ok = new Information("class/php/php_on/header_action_add2.php"); // création de la classe 
ok.add("time", time); // ajout de l'information pour lenvoi 
ok.add("liste_projet_id_parent", liste_projet_id_parent); // ajout de l'information pour lenvoi 

 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


function oui_ok() {


 





 






location.reload() ; 
}




  }


  function element_edit(_this){
   


var ok = new Information("class/php/cookie_table/element_edit.php"); // création de la classe 
 
ok.add("time", _this.title); // ajout de l'information pour lenvoi 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

 


const myTimeout = setTimeout(myGreeting, 100);

function myGreeting() {
  location.reload() ; 
}


  }
</script>

<style>
  .space_display_1{
   display:flex; 
   justify:space-around ; 
   flex-wrap : wrap ; 
   width:80%;
   margin:auto ; 
  }
</style>