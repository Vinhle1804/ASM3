<?php 
session_start();
ob_start();
include 'config/db.php';
include 'action/user.php';
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $role=checkuser($user,$pass);
    $_SESSION['role']=$role;
    if($role==1) 
    header('location: index.php');
    else header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
  
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 50px;
    text-align: center;
    max-width: 400px;
    width: 100%;
}

.register-form h1 {
    color: #ee4d2d;
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    font-weight: bold;
}

input[type="password"],
input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 5px;
}

button {
    background-color: #ee4d2d;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    padding: 10px 20px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #ff6347;
}

p {
    margin-top: 15px;
    font-size: 14px;
}

a {
    color: #ee4d2d;
    text-decoration: none;
    font-weight: bold;
}

    </style>
</head>
<body>
    <div class="container" >
        <form class="register-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <h1>Đăng nhập</h1>
            <div class="form-group">
                <label for="email">User:</label>
                <input type="text" id="email" name="user" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="pass" required>
            </div>
            
            <button type="submit">Đăng nhập</button>
            <p>Bạn chưa có tài khoản? <a href="Signup.php">Đăng ký</a></p>
        </form>
    </div>
</body>
</html>



