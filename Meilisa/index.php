
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="assets/style/style.css">

</head>
<body>
    <div class="garis">
    <header class="kepala">
        <div class="clearfix">
            <div class="logo">
                <h1>Dekorasi dan Gaun Padang Tualang</h1>
            </div>

        </div>
        <div class="bagian-bawah">
            <ul class="menu">
                <li><a href="index.php" class="active">Home</a></li>
                
            </ul>
        </div>
    </header>
</div>
<div class="mainc garis">



<h1>Login</h1>
    <form action="proses/proses.php?aksi=login" method="POST">
<center>
<table>
<tr>        
<td>Username</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
 <td> <input type="submit" value="Login" name="login"></td>
</tr>
</table>
</center>
</form>  

    </div>

    <footer class="kaki">
        <br><br>
        <p></p>
    </footer>
</body>
</html>