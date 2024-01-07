<?php
session_start() ; 
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
<?php


 
$arr = array(
    "50m - Salle | M",
    "60m - Salle | M",
    "200m - Salle | M",
    "400m - Salle | M",
    "50m Haies(106)-Salle | M",

    "60m Haies(106)-Salle | M",
    "100m | M | Vent : VR",
    "200m | M | Vent : VR",
    "400m | M",
    "110m Haies (106) | M | Vent : VR",

    "400m Haies (91) | M",
    "2023 | 400m Haies (91) | M"

);


?>
<?php 
include("../give_url.php"); 
 


$give_url= give_url() ;
include("../Select_datas.php") ; 
 include("cotation_modes.php") ; 

 var_dump($perf_cotation) ; 
$nom_total_epreuves = array();


$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

    'get_emplacement',		//0
    'get_rp_array_2',		//1
    'get_vent_array_2',		//2
    'get_result_users_perf_array_2',		//3
    'get_result_users_nom_1_array_2',		//4
    'get_result_users_nom_2_array_2',		//5
    'get_result_users_nom_3_array_2',		//6
    'get_result_users_nom_4_array_2',		//7
    'get_users_nationality_array_2',		//8
    'get_club_nom_complet_array_2',		//9
    'get_club_departement_array_2',		//10
    'get_club_region_array_2',		//11
    'get_cat_array_2',		//12
    'get_users_naissance_array_2',//13		
    'get_result_date_perf_array_2',		//14 
    'get_result_villes_nom_array_2',		//15  //
    'epreuve_sex_array_2',		//16
    'get_users_nom_complet_array',	//17	
    'info_all_array_click',		//18
    'info_all_array_ip',		//19
    'info_all_array_src_name',	//20	
    'window_location_href',	//21
    'get_epreuve_nom_complet'	//22

    );
 
 
    $apple->sql='SELECT * FROM `info_all_array` WHERE `get_users_nom_complet_array`="'.$give_url.'"';
    $apple->execution();
    $myJSON = json_encode($apple->list_row);       
    // creation de la variable vide
    $number = 0;  
$get_result_users_nom_1_array_2_const = $apple->list_row[4];
$get_result_users_nom_4_array_2_const = $apple->list_row[7];
$get_users_nationality_array_2_const = $apple->list_row[8];
$get_users_naissance_array_2 =$apple->list_row[13];  
$get_epreuve_sex_array_2_cosnt= $apple->list_row[22];




 
$list_get_result_users_perf_array_2 = array() ; // 3 
$list_get_users_nationality_array_2 = array() ;  //8
$list_get_club_nom_complet_array_2 = array();//9
$list_get_cat_array_2 =               array() ; //12
$list_get_result_villes_nom_array_2 = array() ; //15
$list_get_epreuve_nom_complet =       array() ; // 22 


 
$all_list_get_result_users_perf_array_2 = array() ; // 3 
$all_list_get_users_nationality_array_2 = array() ;  //8
$all_list_get_club_nom_complet_array_2 = array();//9
$all_list_get_cat_array_2 =               array() ; //12
$all_list_get_result_villes_nom_array_2 = array() ; //15
 
$all_list_get_epreuve_nom_complet =       array() ; // 22 


 $all_array_1 = array() ; 
 $all_array_2 = array() ; 

for($i = 0 ; $i< count($apple->list_row)  ; $i ++){
 
  
 

  if (!in_array($apple->list_row[$i], $all_array_1))
  {
  array_push($all_array_1,$apple->list_row[$i]) ; 
  
  $c_array =  count($all_array_1);
  
  $all_array_2[$c_array][0][0] = $c_array ; 
  $all_array_2[$c_array][0][1] = $apple->list_row[$i]; 
  $all_array_2[$c_array][0][2] = $i ; 
  $all_array_2[$c_array][0][3] = 1; 


 
  }
  else {

  
 
   $key_ =array_search($apple->list_row[$i],$all_array_1) ; 
    


   $all_array_2[$key_][0][3] = $all_array_2[$key_][0][3] +1; 
  
  }

 

  switch (fmod($i,count($apple->row))) {
    case "3":
          if (!in_array($apple->list_row[$i], $list_get_result_users_perf_array_2))
          {
          array_push($list_get_result_users_perf_array_2,$apple->list_row[$i]) ; 
          }
 
      break;
      case "8":
        if (!in_array($apple->list_row[$i], $list_get_users_nationality_array_2))
        {
        array_push($list_get_users_nationality_array_2,$apple->list_row[$i]) ; 
        }

    break;
      case "9":
        if (!in_array($apple->list_row[$i], $list_get_club_nom_complet_array_2))
        {
        array_push($list_get_club_nom_complet_array_2,$apple->list_row[$i]) ; 
        }

    break;
    case "12":
      if (!in_array($apple->list_row[$i], $list_get_cat_array_2))
      {
      array_push($list_get_cat_array_2,$apple->list_row[$i]) ; 
     
      }

  break;
  case "15":
    if (!in_array($apple->list_row[$i], $list_get_result_villes_nom_array_2))
    {
    array_push($list_get_result_villes_nom_array_2,$apple->list_row[$i]) ; 
  
    }

  break;
  case "22":
    if (!in_array($apple->list_row[$i], $list_get_epreuve_nom_complet))
    {
    array_push($list_get_epreuve_nom_complet,$apple->list_row[$i]) ; 
    }

  break;

 
 
  }
  
  // get_club_nom_complet_array_2
}











 //var_dump($list_index_off) ; 

 
 
 for($o = 0 ; $o<count($list_get_result_users_perf_array_2); $o ++ ) {
 
  $key = array_search($list_get_result_users_perf_array_2[$o], $apple->list_row); 
  //echo   $apple->list_row[$key]." : ".$apple->list_row[$key+12];
  $all_list_get_result_users_perf_array_2[$o][0][0] = $key ; 
  $all_list_get_result_users_perf_array_2[$o][0][1] = $apple->list_row[$key] ; // get_result_users_perf_array_2
  $all_list_get_result_users_perf_array_2[$o][0][2] = $apple->list_row[$key+1] ; // get_result_users_nom_1_array_2
  $all_list_get_result_users_perf_array_2[$o][0][3] = $apple->list_row[$key+2] ; // get_result_users_nom_2_array_2
  $all_list_get_result_users_perf_array_2[$o][0][4] = $apple->list_row[$key+3] ; // get_result_users_nom_3_array_2
  $all_list_get_result_users_perf_array_2[$o][0][5] = $apple->list_row[$key+4] ; // get_result_users_nom_4_array_2
  $all_list_get_result_users_perf_array_2[$o][0][6] = $apple->list_row[$key+5] ; // get_users_nationality_array_2
  $all_list_get_result_users_perf_array_2[$o][0][7] = $apple->list_row[$key+6] ; // get_club_nom_complet_array_2
  $all_list_get_result_users_perf_array_2[$o][0][8] = $apple->list_row[$key+7] ; // get_club_departement_array_2
  $all_list_get_result_users_perf_array_2[$o][0][9] = $apple->list_row[$key+8] ; // get_club_region_array_2
  $all_list_get_result_users_perf_array_2[$o][0][10] = $apple->list_row[$key+9] ; // get_cat_array_2
  $all_list_get_result_users_perf_array_2[$o][0][11] = $apple->list_row[$key+10] ; // get_users_naissance_array_2
  $all_list_get_result_users_perf_array_2[$o][0][12] = $apple->list_row[$key+11] ; // get_result_date_perf_array_2
  $all_list_get_result_users_perf_array_2[$o][0][13] = $apple->list_row[$key+9] ; // get_result_villes_nom_array_2
  $all_list_get_result_users_perf_array_2[$o][0][14] = $apple->list_row[$key+9] ; // epreuve_sex_array_2
  $all_list_get_result_users_perf_array_2[$o][0][15] = $apple->list_row[$key+9] ; // get_users_nom_complet_array
  $all_list_get_result_users_perf_array_2[$o][0][16] = $apple->list_row[$key+9] ; // info_all_array_click
  $all_list_get_result_users_perf_array_2[$o][0][17] = $apple->list_row[$key+9] ; // info_all_array_ip
  $all_list_get_result_users_perf_array_2[$o][0][18] = $apple->list_row[$key+9] ; // info_all_array_src_name
  $all_list_get_result_users_perf_array_2[$o][0][19] = $apple->list_row[$key+9] ; // window_location_href
  $all_list_get_result_users_perf_array_2[$o][0][20] = $apple->list_row[$key+9] ; // get_epreuve_nom_complet
 
}



 

for($o = 0 ; $o<count($list_get_users_nationality_array_2); $o ++ ) {
 
  
  $key = array_search($list_get_users_nationality_array_2[$o], $apple->list_row); 
  //echo   $apple->list_row[$key]." : ".$apple->list_row[$key+12];
  $all_list_get_users_nationality_array_2[$o][0][0] = $key ; 
  $all_list_get_users_nationality_array_2[$o][0][1] = $apple->list_row[$key] ; // get_result_users_perf_array_2 
  $all_list_get_users_nationality_array_2[$o][0][1] = $apple->list_row[$key] ; // get_result_users_perf_array_2 

 
}


for($o = 0 ; $o<count($list_get_users_nationality_array_2); $o ++ ) {
 
  
  $key = array_search($list_get_users_nationality_array_2[$o], $apple->list_row); 
  //echo   $apple->list_row[$key]." : ".$apple->list_row[$key+12];
  $all_list_get_users_nationality_array_2[$o][0][0] = $key ; 
  $all_list_get_users_nationality_array_2[$o][0][1] = $apple->list_row[$key] ; // get_result_users_perf_array_2 
 
}
 


for($o = 0 ; $o<count($list_get_club_nom_complet_array_2); $o ++ ) {
 
  
  $key = array_search($list_get_club_nom_complet_array_2[$o], $apple->list_row); 
  //echo   $apple->list_row[$key]." : ".$apple->list_row[$key+12];
  $all_list_get_club_nom_complet_array_2[$o][0][0] = $key ; 
  $all_list_get_club_nom_complet_array_2[$o][0][1] = $apple->list_row[$key] ; // get_result_users_perf_array_2 
  $all_list_get_club_nom_complet_array_2[$o][0][1] = $apple->list_row[$key+5] ; // date 

 
}


for($o = 0 ; $o<count($list_get_cat_array_2); $o ++ ) {
 

  //echo $list_get_cat_array_2[$o]."<br/>" ; 
 
  $key = array_search($list_get_cat_array_2[$o], $apple->list_row); 
  //echo   $apple->list_row[$key]." : ".$apple->list_row[$key+12];
  $all_list_get_cat_array_2[$o][0][0] = $apple->list_row[$key] ; // get_result_users_perf_array_2 
  $all_list_get_cat_array_2[$o][0][1] = $apple->list_row[$key+2] ; // get_result_users_perf_array_2 
  $all_list_get_cat_array_2[$o][0][2] = $apple->list_row[$key+12] ; // get_result_users_perf_array_2 

/*
  $all_list_get_cat_array_2[$o][0][0] = $key ; 
  $all_list_get_cat_array_2[$o][0][2] = $apple->list_row[$key+5] ; // date 
*/
 
}









for($o = 0 ; $o<count($list_get_result_villes_nom_array_2); $o ++ ) {
 

  //echo $list_get_result_villes_nom_array_2[$o]."<br/>" ; 
 
  $key = array_search($list_get_result_villes_nom_array_2[$o], $apple->list_row); 
  //echo   $apple->list_row[$key]." : ".$apple->list_row[$key+12];
  $all_list_get_result_villes_nom_array_2[$o][0][0] = $apple->list_row[$key] ; // get_result_users_perf_array_2 
  $all_list_get_result_villes_nom_array_2[$o][0][1] = $apple->list_row[$key-1] ; // get_result_users_perf_array_2 
  $all_list_get_result_villes_nom_array_2[$o][0][2] = $apple->list_row[$key-2] ; // get_result_users_perf_array_2 
  $all_list_get_result_villes_nom_array_2[$o][0][3] = $apple->list_row[$key-3] ; // get_result_users_perf_array_2 


 
  
/*
  $all_list_get_cat_array_2[$o][0][0] = $key ; 
  $all_list_get_cat_array_2[$o][0][2] = $apple->list_row[$key+5] ; // date 
*/
 
}






for($o = 0 ; $o<count($list_get_epreuve_nom_complet); $o ++ ) {

 
  $key = array_search($list_get_epreuve_nom_complet[$o], $apple->list_row); 
  $all_list_get_epreuve_nom_complet[$o][0][0] = $apple->list_row[$key] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][1] = $apple->list_row[$key-8] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][2] = $apple->list_row[$key-10] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][3] = $apple->list_row[$key-11] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][4] = $apple->list_row[$key-12] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][5] = $apple->list_row[$key-13] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][6] = $apple->list_row[$key-14] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][7] = $apple->list_row[$key-19] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][8] = $apple->list_row[$key-20] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][9] = $apple->list_row[$key-21] ; // get_result_users_perf_array_2 
  $all_list_get_epreuve_nom_complet[$o][0][10] = $apple->list_row[$key-22] ; // get_result_users_perf_array_2 

 
}


 


 
  ?>





<?php 



echo $get_result_users_nom_1_array_2_const."<br/>" ; 


echo "<br/>".$get_result_users_nom_4_array_2_const ; 
echo "<br/>".$get_users_nationality_array_2_const ; 
  



echo "<h1>CLUBS</h1>" ; 
for($a = 0 ;$a<count($list_get_club_nom_complet_array_2); $a++) {
  echo $list_get_club_nom_complet_array_2[$a]."<br/>";
}



if($get_users_naissance_array_2>50){
  $get_users_naissance_array_2 = "19".$get_users_naissance_array_2;
}
else {
  $get_users_naissance_array_2 = "20".$get_users_naissance_array_2;

}
echo "<br/>".$get_users_naissance_array_2 ."<br/>"; 



echo "<br/>" ; 
 
if(strpos($get_epreuve_sex_array_2_cosnt,"F")){
  $sex = "F" ;
}
else {
  $sex = "M" ;

}
 

echo $sex ; 
echo "<br/>" ; 
 
echo "<div id='list_epreuves'>XXXXX</div>" ; 

echo "<h1>Epreuves</h1>" ; 

for($a = 0 ;$a<count($all_list_get_epreuve_nom_complet); $a++) {
 
  

      echo "<div onclick='affiche_1(this)' class='elements_0 text-center' id='parent_' title='$a'>".$all_list_get_epreuve_nom_complet[$a][0][0]."</div>";
      echo "<div  class='display_none' id='$a'>"; 

  ?>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Perf</th>
      <th scope="col">Date</th>
     
    
      <th scope="col">Club</th>
 
    
      <th scope="col">Categorie</th>
      <th scope="col">Niveau</th>

  

    </tr>
  </thead>
  <tbody>



<?php 

$salle_spring_m = array("50m - Salle | M") ; 



      for($u=0;$u<count($apple->list_row); $u ++) {
    
          if($apple->list_row[$u]==$all_list_get_epreuve_nom_complet[$a][0][0]){
 


    
                     
 
 
            $age_perf =  intval("20".$apple->list_row[$u-8][6].$apple->list_row[$u-8][7])-$get_users_naissance_array_2; 
           

            

   

?>
    <tr>
    
      <td class="colors_"><?php echo $apple->list_row[$u-19] ?></td>
      <td class="colors_"><?php echo $apple->list_row[$u-8]." <b>".$age_perf." ans</b>" ?></td>

  
      <td class="colors_"><?php echo $apple->list_row[$u-13] ?></td>
      <td class="colors_"><?php echo $apple->list_row[$u-10] ?></td>
      <td><?php   
      
      echo    array_search( $apple->list_row[$u], $arr) ; 
      
      ?></td>

 
    </tr>


<?php

          }
          
        }


        echo "  </tbody></table></div>";

}





 
 
 /*


 

for($a = 0 ; $a<count($all_array_2) ; $a ++) {
  echo $all_array_2[$a][0][0]." : ".$all_array_2[$a][0][1]." : ".$all_array_2[$a][0][2]." : [".$all_array_2[$a][0][3]."]:  ". $apple->list_row[$all_array_2[$a][0][2]]; 
  echo "<br/>" ; 
  echo "<br/>" ; 
}
*/
?>

 
  
</body>



 
<style>
  .elements{
    font-size:.5em; 
    color:grey ; 
  }

  .elements_1{
 
 
    color:white ;
  }
  .elements_0{
 background-color:rgba(0,0,0,0.8) ;
 color:white ;  
 padding:5px ; 
  }
  .elements_0:hover{
        background-color:rgba(0,0,0,1) ; 
        transition:0.5 all ; 
        cursor:pointer ; 
      
  }
  .display_none{
    display:none ; 
  }
  .colors_:hover{
    background-color:rgba(0,0,0,1) ; 
        transition:0.5 all ; 
        cursor:pointer ; 
        color:white ; 
  }
 
</style>




<script>

  /*
 var elements =[] ; 
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
 
      const obj = JSON.parse(  this.responseText);
      console.log(obj) ; 
      elements = obj ; 
    }
  };
  xhttp.open("GET", "https://bokonzi.com/script_ffa_front_back/model/class/php/data/test.php", true);
  xhttp.send();
 

*/

 
 
// exemple de code 

/* 
Ajax(nomId,document/source.txt);
*/
</script>

<script>
  function affiche_1(_this){
    console.log(_this.title) ; 

var a = _this.title ; 

console.log(document.getElementById(a).className) ; 
if(document.getElementById(a).className=="display_none"){
  document.getElementById(a).className="" ; 
}
else {
  document.getElementById(a).className="display_none" ; 

}
   
  }
</script>


<?php 



 
?>