<?php

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="hayo1.css">
  </head>
  <body>
    <h1>Login</h1>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>

<form action="proses-login.php" method="post">
    <table>
<tr>
    <td><label for="">Username</label></td>
    <td><input type="text" name="username" id="" class="form_login" placeholder="username"></td>
</tr>
<tr>
    <td><label for="">Password</label></td>
    <td><input type="password" name="password" id="" class="form_login" placeholder="Password"></td>
</tr>
<tr>
    <td></td>
    <td>
    <input type="submit" value="Login" name="btnlogin" class="login">
    </td>
</tr>
</table>
</div>
</form>