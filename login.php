<?php
session_start();
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
 

    <title>login</title>
  </head>
  <body style="background-color:black;">
      <form method="post" action="authulization.php">
          <table class="table" style="background-color:#e4e4e7;">
       <tr>&nbsp;</tr>
         <tr>&nbsp;</tr>
           <tr>&nbsp;</tr>
             <tr>&nbsp;</tr>
             <tr style="background-color:#e4e4e7;" width="50%"><br><br>
             <td style="background-color:#e4e4e7;"> <center> <h1 style="color:black;">Login!</h1></center></td><br>
                 </tr>
                 <tr><td style="background-color:#e4e4e7;"><input class="form-control" name="username" id="username" type="text" placeholder="Username" aria-label="Username"></td><br></tr>
               <tr>  <td style="background-color:#e4e4e7;"><input class="form-control" type="password" name="password" id="password" placeholder="Password" aria-label="password"></td></td><br></tr>
                 <tr><td style="background-color:#e4e4e7;"><button type"submit" class="btn btn-primary" name="login_user">Login</button></td></tr>
                 <td>ยังไม่มีบัญชีใช่ไหม?<a href="signup.php">sign-up</a></td></tr>
             </tr>
   </table>
   </form>

  </body>
</html>