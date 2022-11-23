<?php include "connect2.php"?>
<html>
<head>
    <meta charset="utf-8">
    <link href="style/style_ad2.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/ea69c221e1.js" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <img src="img_decorate/jewshop5.png" width="200" height="40" >
    </header>
    <nav>
        <ul class="navbar">
            <li><a href="homead.php">BACK</a></li>
            <li><a href="T001.php">Necklace</a></li>
            <li><a href="T002.php">Ring</a></li>
            <li><a href="T003.php">Earring</a></li>
            <li><a href="T004.php">Bracelet</a></li>
        </ul>
    </nav>
    
    <?php
         
    ?>

    <section class="list">
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'jewelry_shop');
            $perpage = 5;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
         
            $start = ($page - 1) * $perpage;
        
        
            $stmt = $pdo->prepare("SELECT * FROM product limit {$start} , {$perpage}");
            $stmt->execute();
            
            while ($row = $stmt->fetch()) {
                echo "รหัสสินค้า:" .$row ["id_product"]."<br>";
                echo "ชื่อสินค้า:" .$row ["name_product"]."<br>";
                echo "ราคาสินค้า:" .$row ["price_product"]. "<br>";
                echo "จำนวน:" .$row ["num_product"]. "<br>";
                echo "ประเภทสินค้า:" .$row ["id_type"]. "<br><hr>";

        } ?>
        
        <?php
            $sql2 = "select * from product";
            $query2 = mysqli_query($con, $sql2);
            $total_record = mysqli_num_rows($query2);
            $total_page = ceil($total_record / $perpage);
        ?>
        
        <ul class="pagination">
            <li>
                <a href="Allproduct.php?page=1" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for($i=1;$i<=$total_page;$i++){ ?>
                <li><a href="Allproduct.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
            <li>
                <a href="Allproduct.php?page=<?php echo $total_page;?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </section>

    

        
    

    
    <br><br><br><br><br><br>
</body>
</html>