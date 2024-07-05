<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <form action="" method="post" enctype="multipart/form-data">
            <label>choose file</label>
            <input type="file" name="image" required=""/>
            <label>Title</label>
            <input type="text" name="title" required=""/>
            <label>price</label>
            <input type="text" name="price" required=""/>
            <input type="submit" name="save"/>
        </form>
        <?php
        // put your code here
        $conn = mysqli_connect('localhost', 'root', '', 'gallery');

        if (isset($_POST['save'])) {
            $pdf = $_FILES['image']['name'];
            $type = $_FILES['image']['type'];
            $pdf_size = $_FILES['image']['size'];
            $pdf_tem_loc = $_FILES['image']['tmp_name'];
            $pdf_store = "images/" . $pdf;
            $desc = $_POST['title'];
            $price = $_POST['price'];

            move_uploaded_file($pdf_tem_loc, $pdf_store);
            $sql = "INSERT INTO himage(image, title, price)"
                    . "VALUES('$pdf','$desc', '$price')";
            $query = mysqli_query($conn, $sql);
            if ($pdf = "" && $desc = "" && $price=""){
                echo "failed";
            } else {
                echo 'successfully';
            }
        }
        ?>
    </body>
</html>
