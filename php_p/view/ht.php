<?php
    include 'controller/cProducts.php';
    $p = new cProducts();
    if (isset($_SESSION['role']) && $_SESSION['role']== 1) {
        $products = $p->show_all();
    } else if (isset($_GET['pages'])) {
        $id = $_GET['pages'];
        $products = $p->show_id($id);
    }
    else if (isset($_GET['btntim'])) {
        $name = $_GET['tim'];
        $products = $p->show_name($name);
    }
    

    else 
        $products = $p->show_all();

    if ($products != false && $products->num_rows > 0) {
        echo '<div style="display: flex; flex-wrap: wrap; gap: 10px; ">';
        while ($num = $products->fetch_assoc()) {

            echo '<div style="width: 200px; height: 300px; border: 1px solid black; text-align: center;">'.
                '<img src="img/'. $num['img_dir'].'" style="width: 180px; height: 180px">'.
                '<p>'. $num['ten'] .'</p>'.
                '<p style="color: red; padding-bottom: 2px;">'. $num['gia'] .'</p>'.
                '</div>';
        }
        echo '</div>';
    } else{
        echo "Không có sản phẩm";
    }



?>