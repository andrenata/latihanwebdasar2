<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>LOGIN - Latihan Web Dasar - STMIK Denpasar</title>
	<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <div class="login-box">
        <h1>Login</h1>
        <p class="error">login gagal, email dan password salah!</p>
        <form action="functions/getlogin.php" method="post">
            <label>Email</label> <br>
            <input type="email" name="email"> <br>
            <label>Password</label> <br>
            <input type="password" name="password">
            <input type="submit" value="LOGIN">
        </form>
    </div>
    <!-- end login box -->
    
</body>
</html>