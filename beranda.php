<?php
session_start();
if(!$_SESSION['user']){
    header('location:index.php');
}
?>
<h1>Selamat Datang, <?php echo $_SESSION['user']; ?> di  XII RPL 2</h1>

<br>
<br>
<form method="POST">
    <input type="sumbit" name="logout" value="logout">
</form>
<?php
if (isset($_POST['logout'])){
unset($_SESSION['user']);
header("location:index.php");
}
?>