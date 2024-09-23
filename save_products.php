<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css">
</head>

<body>
<?php

$product=$_POST['producto'];
$price=$_POST['precio'];
$category=$_POST['categoria'];
include_once("config_products.php");
include_once("db.class.php");
$link=new Db();
// La conexión

//include_once('upload_image.php');
//$path_img=$directorio.$nombre_img; // Ruta completa de la imagen levantada

include_once('upload.class.php');
$upload=new Upload();
$path_img=$upload->uploadImage();// Devuelve la ruta y el nombre de la imagen

$sql="insert into products (product_name,image,price,id_category) values (:product,:path_img,:price,:category)";
$stmt = $link->prepare($sql);
$stmt->bindValue(':product', $product);
$stmt->bindValue(':price', $price);
$stmt->bindValue(':category', $category);
$stmt->bindValue(':path_img', $path_img); //No es necesario sanear sino es que para linkear
if ($stmt->execute()){
    ?>
    <script>
     alert("Producto Ingresado!"); 
     window.location="insert_products.php"; 
    </script>
    <?php
} 

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>