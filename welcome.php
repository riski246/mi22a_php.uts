<?php
session_start();

// Periksa apakah pengguna sudah login
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    background: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
}

.form-box, .result-box {
    width: 300px;
    padding: 40px;
    background: #fff;
    text-align: center;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
    margin: 20px;
}

.form-box h2, .result-box h2 {
    margin: 0 0 20px;
    padding: 0;
    color: #333;
}

.textbox {
    position: relative;
    margin-bottom: 30px;
}

.textbox input {
    width: 100%;
    padding: 10px;
    background: #f2f2f2;
    border: none;
    outline: none;
}

.btn {
    width: 100%;
    background: #4ddf14;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    text-decoration: none;
}

.btn:hover {
    background: #555555;
}
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

nav {
  background-color: #333;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

nav ul li {
  display: inline;
}

nav ul li a {
  display: inline-block;
  padding: 15px 20px;
  text-decoration: none;
  color: #fff;
}

nav ul li a:hover {
  background-color: #555;
}

/* Style untuk konten */
div {
  padding: 20px;
  margin-top: 20px;
}

h2 {
  margin-top: 0;
}

</style>
<body>
</div>
    <div class="form-box">
        <h2>Form Profil</h2>
        <form method="post" action="result.php">
            <div class="textbox">
                <input type="text" placeholder="NIM" name="nim" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Kelas" name="kelas" required>
            </div>
            <div class="textbox">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Nomor HP" name="nomor_hp" required>
            </div>
            <input type="submit" class="btn" value="Simpan">
        </form>
    </div>
    <h2>Hallo selamat Bergabung, <?php echo $_SESSION['login_user']; ?>!</h2>
    <a href="logout.php" >Logout</a>
</body>
</html>