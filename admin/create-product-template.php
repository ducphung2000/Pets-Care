<?php
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
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá</label>
                    <input name="price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Giá sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Danh mục sản phẩm</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">Hoa Nhập khẩu</option>
                        <option value="2">Hoa Trong nước</option>
                        <option value="3">Hoa tết</option>
                        <option value="4">Hoa giỏ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Giảm giá</label>
                    <input name="discount" type="number" class="form-control"  placeholder="giảm Giá sản phẩm">
                </div>
                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file">
                </div>
                <input type='submit' value='submit' name='submit'>
            </form>
        </main>
    </div>
</div>

<?php
include 'layout/footer.php';