<?php 
   
 include_once ("controller/UserController.php"); 
   
 $crud= new UserController(); 
   
 if(isset($_POST['submit'])) 
 { 
    $data= array( 
    "name"  => $crud->escape_string($_POST['name']),            
    "email"  => $crud->escape_string($_POST['email']), 
    "phone"  => $crud->escape_string($_POST['phone']) 
    );

    $crud->insert($data, 'form');

    if ($data) {
        echo 'insert successfully';
        header('location:listing.php');
    } else {
        echo 'try again';
    }
} 
   
   
 ?> 
 <!DOCTYPE html> 
 <html> 
 <head> 
 <title>add in oops</title> 
 <link rel="stylesheet" type="text/css" href="css/style.css"> 
 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
 </head> 
 <body> 

 <?php 
     include_once (__DIR__ . "/views/layout/header.php");
 ?>
   
   <div class="container">
      <div class="row">
        <div style="margin: 5%;padding-left: 32%;">
        <form class="form" method="POST" name="form"> 
        
        <label>Name :</label> 
        <input type="text" name="name"><br/> 
        
        <label>Email :</label> 
        <input type="text" name="email"><br/> 
        
        <label>Phone :</label> 
        <input type="text" name="phone"><br/> 
        
        <input type="submit" name="submit"> 
        
        </form> 
        </div>
      </div>
   </div>
 </body> 
 </html> 