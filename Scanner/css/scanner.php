<!DOCTYPE html>
<html class="full" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barcode scanner</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>

    <!-- Custom CSS -->
    <link href="css/full.css" rel="stylesheet">

      <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    
        <!-- Initialize JS Plugins -->
     <script>
     var barcodeParsed = null;
     var studentenNr = null;
     var barcodeParsing = null;   
     var waarde= null;
$(document).ready(function() {
    var pressed = false; 
    var chars = []; 
    var count = 0;
    $(window).keypress(function(e) {
        if (e.which >= 48 && e.which <= 57) {
            chars.push(String.fromCharCode(e.which));
        }
        console.log(e.which + ":" + chars.join("|"));
        if (pressed == false) {
            setTimeout(function(){
                if (chars.length >= 10) {
                    var barcode = chars.join("");
                    console.log("Barcode Scanned: " + barcode);
                    barcodeParsed = barcode;
                    barcodeParsing = barcodeParsed.substring(5,11);
                    $("#barcode").val("s" + barcodeParsing);
                    studentenNr = "s" + barcodeParsing;
    console.log(studentenNr + " studentenNr");
                    var length = studentenNr.length;
                   if(length == 7){
                           document.getElementById('btn').click();

                   
                   } 
         
                }
                chars = [];
                pressed = false;
            },500);
        }
        pressed = true;
   /*     count = barcodeParsing.length ;

         if(count >= 6){
        document.getElementById('btn').click();

    
    }*/
    });
    
    
    
    /* $('#barcode').keyup(function() {
        if ($(this).val().length === 7) {
            var $parent = $(this).parent();
            while (!$parent.is('form'))
                $parent = $parent.parent();
            if ($parent.is('form'))
               // $("#form")[0].reset();
                //$parent.submit();
                document.getElementById('btn').click();
        }
    }); */
    
    
    /*
    if(docement.getElementById('barcode').length = 7){
    
    document.getElementById('btn').click();
        
    }
    if(docement.getElementById('student').length = 7){
    
    document.getElementById('btn').click();
        
    }
    var barcodeMeting = document.getElementById("barcode").value.length;

if(barcodeMeting.innerHTML.length == 7){
    document.getElementById('btn').click();
}
    */
   
    
    
    $("#btn").click(function(){
 // automatisch laten maken 
        

       
          if(barcode.value == ""){
        studentenNr = $('#student').val();
              console.log("waarde van barcode is leeg")
          }
        console.log(studentenNr + " studnr");
console.log(barcode.value);
 //      document.getElementById("barcode").value = '';

        $.post("getstudent.php", //Required URL of the page on server
{ // Data Sending With Request To Server
studentenNr:studentenNr,
},
function(response,status){ // Required Callback Function
    
    $('#data').html(response);
//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
//$("#form")[0].reset(); !!!!!
});
        
}
                    
                   
                    
                    
                    
                    

); 
    
  
});
         
       
   </script>
    
    
</head>

    
    
    
    
    
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation"> 
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                                   

                            <a class="navbar-brand" href="http://www.ap.be"><img src="Images/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="scanner.php">Scanner</a>
                    </li>
                    <li>
                        <a href="manual.html">Gebruikershandleiding</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 center"><p class="style">barcode scanner examens</p></div>
  <div class="col-md-4"></div>
</div>

    
    <div class="row">
  <div class="col-md-6">
     <h1 class="textheading"> <img class="icon" src="Images/zoomen-op-een-barcode_318-35908.jpg">  barcode</h1> <br><br><br>
      <div class="scannerInput">
      <div class="scannerInputHeader">Barcode scanner input</div>
    <div class="rightSlider"></div>
        <div class="inputFields">
          <form id="form" method="post">
                <input type="text" name="barcode" id="barcode" class="inputBarcode" placeholder="  Wachten op barcode scan.." onkeydown="if (event.keyCode == 13) document.getElementById('btn').click()">
        <input type="text" name="student" id="student" value="" class="inputBarcode" placeholder="  Studentennummer graag hier invullen" onkeydown="if (event.keyCode == 13) document.getElementById('btn').click()">
            <br> 
              </form>
            <button id="btn" type="submit" class="btn">Enter</button>
          
          </div>
          <div class="socialMedia">
          <div class="fb">
              </div>
          
          </div>
                              <div class="setting"></div>

      </div>  
        
        

        </div>
  <div class="col-md-6"><h1 class="textheading"><img src="Images/visitekaartje_318-1057.jpg" class="icon"> visitekaartje</h1> <br><br><br>
        
        <div class="visiteKaartje">
<!--  <div class="col-md-6 floating start"><h4>Bart Van der Linden</h4><h5>Student,s081704</h5></div>
            <div class="col-md-6 "></div>

            </div>
            <div class="row">
                        <div class="col-md-6 floating start2"><h4>Lokaal : </h4> </div>
                        
            
            </div>
             <div class="row">
                        <div class="col-md-6 floating start3"><h4>Vak : </h4> </div>
                        

            </div>

             <div class="row">
                        <div class="col-md-6 floating start4"><h4>Tijdsstip : </h4> </div>
                        

            </div>

             <div class="row">
                        <div class="col-md-6 floating start5"><h4>Juist? </h4> </div>
                        
            
            </div>
-->
          <div id="data" class="dimensions">
          
          <h5>Uw visiteKaartje : </h5>
          
          
          </div>
        
        </div>
</div>
   
    
    <!--
    <footer class="footer">
      <div class="contentap container">
        <img src="Images/afbeeldingAPonderaan.png">
      </div>
    </footer>-->
    
    
    <div class="middle"><br><br><br><br><br><h5>#barcodescannerAP</h5><br><div></div> </div>
    
    
    <footer>
    <div class="footer">&#169;
 Ap Hogeschool Antwerpen </div>
    
    </footer>
    
    
    <!-- Put your page content here! -->

    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
