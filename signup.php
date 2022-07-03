<?php
include('conn.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 

    <title>sign-up</title>
  </head>
  <body>
      <form method="post" action="savemember.php">
          <table class="table" style="background-color:#e4e4e7;">
       <tr>&nbsp;</tr>
         <tr>&nbsp;</tr>
           <tr>&nbsp;</tr>
             <tr>&nbsp;</tr>
             <tr style="background-color:#e4e4e7;" width="50%"><br><br>
             <td style="background-color:#e4e4e7;"> <center> <h1 style="color:black;">Sign-up</h1></center></td><br>
                 </tr>
                 <tr><td style="background-color:#e4e4e7;"><input class="form-control" name="username" id="username" type="text" placeholder="Username" aria-label="Username"></td></tr>
               <tr>  <td style="background-color:#e4e4e7;"><input class="form-control" type="password" name="password" id="password" placeholder="Password" aria-label="password"></td><br></tr>
                   <tr><td style="background-color:#e4e4e7;"><input class="form-control" type="text" name="ชื่อ-สกุล" id="name" placeholder="ชื่อ-สกุล" aria-label="ชื่อ-สกุล"></td></tr>
             <tr><td style="background-color:#e4e4e7;"><input class="form-control" type="email" name="email" id="email" placeholder="E-mail" aria-label="email"></td></tr>
                  <tr><td style="background-color:#e4e4e7;"><textarea class="form-control"  name="email" id="adress" placeholder="ที่อยู่" aria-label="ที่อยู่" rows="3"></textarea></td></tr>
                 <tr><td style="background-color:#e4e4e7;"><input class="form-control" type="text" name="email" id="phone" placeholder="เบอร์โทรศัพท์" aria-label="เบอร์โทรศัพท์"></td></tr>
             
                 <tr><td style="background-color:#e4e4e7;"><button type"submit" class="btn btn-primary" name="signup_user">signup</button></td></tr>
             </tr>
   </table>
   </form>
   

  </body>
</html>