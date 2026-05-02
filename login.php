<?php 
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "admin" && $password === "123") {
        $_SESSION['username'] = true;

        header("Location: admin.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #0f0f0f;
        color: white;
        font-family: Poppins, sans-serif;

        display: flex;
        justify-content: center;
        align-items: center;

        height: 100vh;
    }

    .login-box {
        background-color: #1a1a1a;
        padding: 30px;
        border-radius: 10px;
        width: 350px;
    }

    input {
        width: 100%;
        padding: 12px;
        margin-top: 10px;

        background-color: #111;
        border: 1px solid #333;
        border-radius: 6px;

        color: white
    }

    button {
        width: 100%;
        margin-top: 20px;

        padding: 12px;
        border: none;
        border-radius: 6px;
        
        background-color: #2563eb;
        color: white;

        cursor: pointer;
    }
</style>
<body>
   <div class="login-box">
     <h2>Login Admin</h2>

    <?php if (isset($error)) echo "<p>$error</p>"; ?>

    <form method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit" name="login">Login</button>
    </form>
   </div>
</body>
</html>
