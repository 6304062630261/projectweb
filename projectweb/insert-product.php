<?php include "connect2.php" ?>
<?php
$stmt = $pdo->prepare("INSERT INTO product VALUES ('',?,?,?,?)");
$stmt->bindParam(1, $_POST["name_product"]);
$stmt->bindParam(2, $_POST["price_product"]);
$stmt->bindParam(3, $_POST["num_product"]);
$stmt->bindParam(4, $_POST["id_type"]);
$stmt->execute(); 
 
$id_product = $pdo->lastInsertId();
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
echo "<script>alert('เพิ่มสินค้าสำเร็จ');window.location.href = 'listproduct.php';</script>";
</body>
</html>
