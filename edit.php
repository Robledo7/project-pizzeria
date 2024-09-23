<?php
session_start();
if ($_SESSION['logueado']) {

include_once("config_products.php");
include_once("db.class.php");

$link=new Db();
$idUpd=$_GET["q"];
$sql="select p.id_product as id_product,p.id_category as id_category,c.category_name as category_name,p.product_name as product_name,p.price as price from products p inner join categories c on p.id_category=c.id_category where p.id_product=".$idUpd;
$stmt=$link->prepare($sql);
$stmt->execute();
$data = $stmt->fetch();
var_dump($data);

}
?>