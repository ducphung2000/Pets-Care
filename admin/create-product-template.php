<?php
session_start();
require_once 'function.php';

// require_once 'connect.php';
include 'layout/header.php';
// $conn = ConnectDB();
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

            
           
            <a href="product-list.php" class="btn btn-danger">Danh sách sản phẩm</a>
            <?php
                if($_SERVER['REQUEST_METHOD']=='POST') {
                    //Validate Form
                    $errors = array();
                    if(!empty($_POST['name'])){
                        $name = $_POST['name'];
                    }else{
                        $errors[] = 'name_err';
                    }

                    if(!empty($_POST['old_price'])){
                        $old_price = $_POST['old_price'];
                    }else{
                        $errors[] = 'old_price_err';
                    }

                    if(!empty($_POST['price'])){
                        $price = $_POST['price'];
                    }else{
                        $errors[] = 'price_err';
                    }

                    if(!empty($_POST['category_id'])){
                        $category_id = $_POST['category_id'];
                    }else{
                        $errors[] = 'category_id_err';
                    }

                    if(!empty($_POST['desc'])){
                        $desc = $_POST['desc'];
                    }else{
                        $errors[] = 'desc_err';
                    }

                    if(!empty($_POST['discount'])){
                        $discount = $_POST['discount'];
                    }else{
                        $errors[] = 'discount_err';
                    }

                    if(!empty($errors)){
                        //có lỗi xảy ra
                        $mess = 'Đã có lỗi xảy ra.Vui lòng kiểm tra lại!'
                        ?>
                        <div class="alert">
                            <?php echo $mess; ?>
                        </div>
                        <?php
                    }else{
                        //Không có lỗi ==> tiến hành thêm dữ liệu;
                        $id = uniqid();
                        $item_product = [
                            'id' => $id,
                            'name' => $name,
                            'old_price' => $old_price,
                            'price' => $price,
                            'category_id' => $category_id,
                            'desc' => $desc,
                            // 'image' => $image,discount
                            'discount' => $discount,
                        ];
                        if (!empty($_SESSION['products'])){
                            $check = false;
                            foreach ($_SESSION['products'] as $item){
                                if ($name==$item['name']){
                                    $check = true;
                                    break;
                                }
                            }
                        }else{
                            $check = false;
                        }

                        // Nếu check =false thêm dữ liệu vào session
                        if ($check==false){
                            $_SESSION['products'][$id] = $item_product;
                            set_flash_session('mess_flash','Thêm sản phẩm thành công');
                            redirect('product-list.php');
                        }else {
                            ?>
                            <div class="alert">Dữ liệu trùng. Vui lòng thay đổi!!!</div>
                            <?php
                        }
                    }
                }
            ?>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên sản phẩm">
                    <?php if(!empty($errors) && in_array('name_err', $errors)): ?>
                    <span class="error">Ở đây không được để trống!!!</span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá cũ</label>
                    <input name="old_price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Giá cũ ">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá Mới</label>
                    <input name="price" type="text" class="form-control" id="exampleInputPassword12" placeholder="Giá mới ">
                    <?php if(!empty($errors) && in_array('price_err', $errors)): ?>
                    <span class="error">Ở đây không được để trống!!!</span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Danh mục sản phẩm</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">Tất cả vật phẩm</option>
                        <option value="2">Phụ kiện cho thú cưng</option>
                        <option value="3">Khác...</option>
                        //<?php
                            // $sql = "SELECT * FROM categories WHERE id";
                            // $result = $conn->query($sql);

                            // if ($result->num_rows > 0) {
                            //     // output data of each row
                            //     while ($row = $result->fetch_assoc()) {
                            //         echo '<option value="'.$row["id"].'">' . $row["category_name"] . '</option>';
                            //     }
                            // }
                        //?>
                        
                    </select>
                    <?php if(!empty($errors) && in_array('category_id_err', $errors)): ?>
                    <span class="error">Ở đây không được để trống!!!</span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" placeholder="Mô tả sản phẩm..." rows="3"></textarea>
                    <?php if(!empty($errors) && in_array('desc_err', $errors)): ?>
                    <span class="error">Ở đây không được để trống!!!</span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Giảm giá</label>
                    <input name="discount" type="number" class="form-control"  placeholder="Giảm giá sản phẩm">
                </div>
                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <input type='submit' value='submit' name='submit'>
            </form>
        </main>
    </div>
</div>

<?php
include 'layout/footer.php';