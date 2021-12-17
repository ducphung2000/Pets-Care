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

            <form action="create-user.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">username/email</label>
                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập username của bạn">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu của bạn">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Repassword</label>
                    <input type="text" name="repassword" class="form-control" placeholder="Nhập lại mật khẩu của bạn">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Loại tài khoản</label>
                    <select name="user_type" class="form-control" id="exampleFormControlSelect1">
                        <option value="0">Admin</option>
                        <option value="1">User</option>
                    </select>
                </div>
                <input type='submit' value='Đăng ký' name='submit'>
            </form>
        </main>
    </div>
</div>

<?php
include 'layout/footer.php';