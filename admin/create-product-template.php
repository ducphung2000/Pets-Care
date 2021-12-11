<?php
session_start();
require_once 'connect.php';
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
            
            <form action="create-product.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-descriptionribedby="emailHelp" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleInputoldprice1">Giá cũ</label>
                    <input name="old_price" type="text" class="form-control" id="exampleInputoldprice1" placeholder="Giá cũ sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleInputprice1">Giá Mới</label>
                    <input name="price" type="text" class="form-control" id="exampleInputprice1" placeholder="Giá mới sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Danh mục sản phẩm</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1" >
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
                    <label for="exampleFormControlTextarea1">Mô tả sản phẩm</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputType1">Loại sản phẩm 1</label>
                    <input type="text" name="type1" class="form-control" id="exampleInputType1" rows="3"></input type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputType2">Loại sản phẩm 2</label>
                    <input type="text" name="type2" class="form-control" id="exampleInputType2" rows="3"></input type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputType3">Loại sản phẩm 3</label>
                    <input type="text" name="type3" class="form-control" id="exampleInputType3" rows="3"></input type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputdiscount">Giảm giá</label>
                    <input name="discount" type="number" class="form-control"  placeholder="Giảm giá sản phẩm">
                </div>
                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file" accept=".jpg,.jpeg,.png,.gif,.jfif">
                </div>
                 <div class="form-group">
                    <label>Ảnh sản phẩm thay đổi 1</label>
                    <input type="file" name="fileToUpload1" id="fileToUpload1" class="form-control-file" accept=".jpg,.jpeg,.png,.gif,.jfif">
                </div>
                <!--<div class="form-group">
                    <label>Ảnh sản phẩm thay đổi 2</label>
                    <input type="file" name="fileToUpload2" id="fileToUpload2" class="form-control-file">
                </div>
                <div class="form-group">
                    <label>Ảnh sản phẩm thay đổi 3</label>
                    <input type="file" name="fileToUpload3" id="fileToUpload3" class="form-control-file">
                </div>
                <div class="form-group">
                    <label>Ảnh sản phẩm thay đổi 4</label>
                    <input type="file" name="fileToUpload4" id="fileToUpload4" class="form-control-file">
                </div> -->
                
                <input type='submit' value='submit' name='submit'>
            </form>
        </main>
    </div>
</div>

<?php
include 'layout/footer.php';