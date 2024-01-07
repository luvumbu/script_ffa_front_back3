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
  <h1 class="liste_projet_name"></h1>
 </div>
  
<div class="container mt-5">
  <div class="row">
    
        <div class="all_img"></div>
    
        
 
      <p class="liste_projet_description1">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>

      <p class="liste_projet_description2"></p>
      <p class="liste_projet_reg_date"></p>


      

   
    
 
  </div>
</div>

</body>
</html>




<script>

     /* 

liste_projet_name
liste_projet_description1

information_user_id_sha1

liste_projet_description2
liste_projet_id_parent
liste_projet_id_sha1
liste_projet_id_sha1_general
liste_projet_img
liste_projet_ip

liste_projet_reg_date
liste_projet_type
liste_projet_visibilite1
liste_projet_visibilite2


     */

    var  elements ="" ; 
    var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
 
    var verif_name = false ; 
 

 
 
elements  =  myObj; 


const myTimeout = setTimeout(html, 0);

}
}; 

 
xmlhttp.open("GET", "../article_json.php/1699078736069", true);




xmlhttp.send();




 





        function html() {

console.log(elements) ; 


var x = 0 ; 


 var liste_projet_name = document.getElementsByClassName("liste_projet_name")[x]  ; 
 liste_projet_name.innerHTML = elements[x].liste_projet_name ;



 var all_img = document.getElementsByClassName("all_img")[x]  ; 
 all_img.style.backgroundImage = "url('../pages_on/download_img/uploads/"+elements[x].information_user_id_sha1+"/"+elements[x].liste_projet_img+"')";


 
  // 

  var liste_projet_description1 = document.getElementsByClassName("liste_projet_description1")[x]  ; 
 liste_projet_description1.innerHTML = elements[x].liste_projet_description1 ;

 var liste_projet_description2 = document.getElementsByClassName("liste_projet_description2")[x]  ; 
 liste_projet_description2.innerHTML = elements[x].liste_projet_description2 ;
  // 

  var liste_projet_reg_date = document.getElementsByClassName("liste_projet_reg_date")[x]  ; 
 liste_projet_reg_date.innerHTML = elements[x].liste_projet_reg_date ;








const myCar = new Car(elements[x].liste_projet_reg_date);

 var liste_projet_reg_date = document.getElementsByClassName("liste_projet_reg_date")[x]  ; 
 liste_projet_reg_date.innerHTML = myCar.jour()+"-"+myCar.mois()+"-"+myCar.anne() ;











/*
 anne
mois
jour

 
console.log(myCar.secondes()) ; 

  // 

  /*
  var liste_projet_name = document.getElementsByClassName("liste_projet_name")[x]  ; 
 liste_projet_name.innerHTML = elements[x].liste_projet_name ;
  // 
  var liste_projet_name = document.getElementsByClassName("liste_projet_name")[x]  ; 
 liste_projet_name.innerHTML = elements[x].liste_projet_name ;
  // 
  var liste_projet_name = document.getElementsByClassName("liste_projet_name")[x]  ; 
 liste_projet_name.innerHTML = elements[x].liste_projet_name ;
  // 
  var liste_projet_name = document.getElementsByClassName("liste_projet_name")[x]  ; 
 liste_projet_name.innerHTML = elements[x].liste_projet_name ;
  // 
  var liste_projet_name = document.getElementsByClassName("liste_projet_name")[x]  ; 
 liste_projet_name.innerHTML = elements[x].liste_projet_name ;
  // 


*/
        }
 





class Car {
  constructor(year) {

    this.year =year.replace(" ", "-"); ;

    this.year =this.year.replace(":", "-"); 
    this.year =this.year.replace(":", "-"); 

  }
 


  condition(condition_1,condition_2,condition_3){

          var condition_2_ = 0 ; 
          var condition_3_ = 0 ; 
          var result = "" ; 
        for(var x = 0 ; x<this.year.length ; x ++  ){
           
             if(this.year[x]==condition_1){     
              condition_2_ ++ ;              
            }
            else {
                      if(condition_2_==condition_3){
                        result  = result+this.year[x] ; 
                      }          
            }
       
        }
        return result ; 
  }
  anne(){  
    
    return this.condition("-",1,0) ; 
  }

  mois(){  
    
    return this.condition("-",2,1) ; 
  }
  jour(){  
    
    return this.condition("-",3,2) ; 
  }
  heure(){  
        return this.condition("-",4,3) ; 
  }

  minutes(){  
        return this.condition("-",5,4) ; 
  }
  secondes(){  
        return this.condition("-",6,5) ; 
  }

/* 
   // anne
   // mois
   // jour
   // heure
   // minutes
   //  secondes

const myCar = new Car("2023-11-04 09:19:59");
console.log(myCar.secondes()) ; 
*/

}

 







</script>

<style>
    .all_img{
        width:100% ; 
        height:200px; 

        background-image:url("http://localhost/Model_Vue9/login/pages_on/download_img/uploads/c112c7a30173389dda190c15548adcfb5581ad23/1699078738741.png") ; 
        background-size:100% ; 
       
    }
    .liste_projet_description1{
         margin-top:150px ;
         text-align:justify  ;  
    }

    .liste_projet_reg_date{
        color : rgba(0,0,0,0.6) ; 

    }
</style>