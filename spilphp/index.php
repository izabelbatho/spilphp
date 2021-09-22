<?php require_once('includes/header.php')?>
<?php require_once('includes/db.php')?>
<?php 

if(isset($_POST['point']) && isset($_POST['name'])){
$point = $_POST['point'];
$name = $_POST['name'];

$sql = "INSERT INTO pointtavle(name, point)VALUES ('$name', '$point')";

mysqli_query($conn, $sql);
}



?>


<form action="index.php" method="post">
    <input type="text" name="name" placeholder="name"> 
    <input type="text" name="point" placeholder="point">
    <input type="submit">

    <h1>Navn: <?php echo $name ?> <br> Point: <?php echo $point ?></h1>
    
</form>


<?php require_once('includes/footer.php')?>