<html>
<head>
    <meta charset="UTF-8">
    <link href="style/style_ad.css" rel="stylesheet"> 
</head>
<body  >
<header><img src="img_decorate/jewshop5.png" width="200" height="40" ></header>
<nav>
    <a href="homead.php">BACK</a>
    </nav>
<section class="list">
<form action="insert-product.php?" method="post">
name<input type="text" name="name_product"><br>
price:<input type="text" name="price_product"><br>
num:<input type="text" name="num_product"><br>
<label>id_type:
<select name="id_type">
<option value="T001" >Necklace</option>
<option value="T002" selected="selected">Ring</option>
<option value="T003">Earring</option>
<option value="T004">bracelet</option>
</select>
</label>
<input type="submit" value="เพิ่มสินค้า">
</form>
</section>
</body>
</html>