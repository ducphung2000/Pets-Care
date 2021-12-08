<?php
session_start();
require_once 'connect.php';
// include 'create-table.php';
// include 'create-product.php';
include 'layout/header.php';
$conn = ConnectDB();
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
             $sql = "SELECT * FROM `products` WHERE id";
             $result = $conn->query($sql);
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $name_product = $_GET['name'];
                    // $old_price = $_GET['old_price'];
                    // $price = $_GET['price'];
                    // $category_id = $_GET['category_id'];
                    // $descripton = $_GET['descripton'];
                    // $discount = $_GET['discount'];
                    Echo $id;
                    Echo $name_product;
                    // Echo $old_price;
                    // Echo $price;
                    // Echo $icategory_idd;
                    // Echo $descripton;
                    // Echo $discount;
                }
            ?>
            <form action="create-product.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-descriptionribedby="emailHelp" placeholder="Nhập tên sản phẩm" value="<?php echo $name_product ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá cũ</label>
                    <input name="old_price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Giá cũ sản phẩm" value="<?php echo $old_price ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá Mới</label>
                    <input name="price" type="text" class="form-control" id="exampleInputPassword12" placeholder="Giá mới sản phẩm"  value="<?php echo $price ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Danh mục sản phẩm</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1"  value="<?php echo $category_id ?>">
                        <option value="0">Tất cả vật phẩm</option>
                        <!-- <option value="2">Phụ kiện cho thú cưng</option>
                        <option value="3">Khác...</option> -->
                        <?php
                            $sql = "SELECT * FROM categories WHERE id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["id"].'">' . $row["category_name"] . '</option>';
                                }
                            }
                        ?>
                        
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"  value="<?php echo $descripton ?>"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Giảm giá</label>
                    <input name="discount" type="number" class="form-control"  placeholder="Giảm giá sản phẩm"  value="<?php echo $discount ?>">
                </div>
                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file"  value="<?php echo $name_img ?>">
                </div>
                <input type='submit' value='submit' name='submit'>
            </form>
        </main>
    </div>
</div>

<?php
include 'layout/footer.php';