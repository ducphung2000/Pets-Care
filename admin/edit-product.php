<?php
session_start();
require_once 'connect.php';
// include 'create-table.php';
// include 'create-product.php';
include 'layout/header.php';
$connect = ConnectDB();
// $result = mysqli_query($connect,"SELECT * FROM products");
//   while($row = mysqli_fetch_array($result)){
//     $id = $_POST['id'];
//   }
?>
<div class="container-fluid">
    <div class="row">
        <?php
        include 'layout/menu.php';
        ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Product</h1>

            </div>
            <div class="table-responsive">
                <h1>Admin</h1>
            </div>
            <?php
            // if(isset($_POST['submit'])){
                //     $id = $_POST['id'];
                //     $name = $_POST['name'];
                //     $old_price = $_POST['old_price'];
                //     $price = $_POST['price'];
                //     $description = $_POST['description'];
                //     $discount = $_POST['discount'];
                //     $image = $_POST['image'];
                // }
                
                
                // if( isset( $_POST['update'] ) ) {
                //   $id = $_POST['id'];
                //   $query = "UPDATE FROM products WHERE id=".$id;
                //   $conn->query($query);
                    $sql = "SELECT * FROM products WHERE id = 1";
                    // $query = "UPDATE News SET name = new_name WHERE id = 1";
                    $result = $connect->query($sql);
                    // if ($connect->query($query) === TRUE) {
                    //     echo "update thành công";
                    // } 
                    
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '
                                <form action="create-product.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-descriptionribedby="emailHelp" placeholder="Nhập tên sản phẩm"'?> value="<?php echo $row['name'] ?>" <?php echo '>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giá cũ</label>
                                        <input name="old_price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Giá cũ sản phẩm" '?> value="<?php echo $row['old_price'] ?>" <?php echo '>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giá Mới</label>
                                        <input name="price" type="text" class="form-control" id="exampleInputPassword12" placeholder="Giá mới sản phẩm" '?> value="<?php echo $row['price'] ?>" <?php echo '>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Danh mục sản phẩm</label>
                                        <select name="category_id" class="form-control" id="exampleFormControlSelect1"  '?> value="<?php echo $row['category_name'] ?>" <?php echo '>
                                            <option value="0">Tất cả vật phẩm</option>'?>
                                            <?php
                                                // $sql = "SELECT * FROM categories WHERE id";
                                                // $result = $conn->query($sql);

                                                // if ($result->num_rows > 0) {
                                                //     // output data of each row
                                                //     while ($row = $result->fetch_assoc()) {
                                                //         echo '<option value="'.$row["id"].'"> '.$row["category_name"].'</option>';
                                                //     }
                                                // }
                                            ?>
                                        <?php 
                                            echo '
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"  '?> value="<?php echo $row['description'] ?>" <?php echo '></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giảm giá</label>
                                        <input name="discount" type="number" class="form-control"  placeholder="Giảm giá sản phẩm"  '?> value="<?php echo $row['discount'] ?>" <?php echo '>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file" >
                                    </div>'?>
                                    <input type='submit' value='submit' name='submit'>
                                    <?php echo '
                                </form>
                            ';}
                        }
                // }
            ?>
            
        </main>
    </div>
</div>

<?php
include 'layout/footer.php';