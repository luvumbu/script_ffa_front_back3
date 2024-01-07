

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
 

<h3>

 <div class="images_ok">

<div class="images_ok_flex">
    <div>
 <img src="https://www.ericfavre.com/lifestyle/wp-content/uploads/2020/04/stress-performances-sportives.jpg" alt="" class="img_profil">
</div>

<div>
Catégorie d'athlétisme 
</div>

<div>
Parcours sportif
</div>

<div>
  Records personnels
</div>
<div>
    club 
</div>
 
</div>
 
<h3  class="text-center">

<?php 
    echo $apple->list_row[17] ; 

    ?>
 <!-- 
<h4 class="text-center">
TRAINING WITH A WORLD CHAMPION
</h4>
-->

</h3>
 </div>


 <div id="total_demi_fond_epreuve" title="<?php echo  $total_demi_fond_epreuve ;  ?>"></div>
<div id="total_fond_epreuve" title="<?php echo  $total_fond_epreuve ;  ?>"></div>
<div id="total_lancee_epreuve" title="<?php echo  $total_lancee_epreuve ;  ?>"></div>
<div id="total_saut_epreuve" title="<?php echo  $total_saut_epreuve ;  ?>"></div>
<div id="total_sprint_epreuve" title="<?php echo  $total_sprint_epreuve ;  ?>"></div>
 
 <style>
    body{
        margin:0; 
        padding: 0 ; 
    }
    .images_ok{
        background-image:url("https://www.e-marketing.fr/Assets/Img/BREVE/2015/5/254316/Marketing-sportif-femmes-loin-derriere-hommes-F.jpg") ; 

        width:100%; 
        height:700px; 
        background-size:100%; 
        color:white ; 
 
        text-shadow:1px 1px black ; 
    }
    .images_ok div div {
 width:100%; 
 text-align:center ; 
      padding:12px; 
    }

    .images_ok div div:hover {
 background-color:rgba(0,0,0,0.3) ; 
 cursor:pointer ; 
 
}
    .images_ok h3 {
     
        padding-top:300px; 
    }


    .images_ok_flex{
 
        display:flex; 
        justify-content:space-around ; 
       
        width : 100%; 
    
    }
    .img_profil{
      width:50px; 
      height:50px; 
      border-radius:100% ; 

    }
 </style>
</body>
</html>


<style>
  .img_hello{
    width:100%; 
  }
</style>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<script>




const xValues = ["demi-fond", "fond", "lancée", "saut", "sprint"];


var result_total_demi_fond_epreuve = document.getElementById("total_demi_fond_epreuve").title;
var result_total_fond_epreuve = document.getElementById("total_fond_epreuve").title;

var result_total_lancee_epreuve = document.getElementById("total_lancee_epreuve").title;
var result_total_saut_epreuve = document.getElementById("total_saut_epreuve").title;
var result_total_sprint_epreuve = document.getElementById("total_sprint_epreuve").title;

const yValues = [
    result_total_demi_fond_epreuve, 
    result_total_fond_epreuve, 
    result_total_lancee_epreuve,
    result_total_saut_epreuve, 
    result_total_sprint_epreuve];
const barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Epreuve"
    }
  }
});
</script>












<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>





<canvas id="myChart0" style="width:100%;max-width:600px"></canvas>

<script>
const xValues = [50,60,70,80,90,100,110,120,130,140,150];
const yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart0", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>




