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

            <form action="create-news.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tiêu đề">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung</label>
                    <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


                <div class="form-group">
                    <label>Ảnh news</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file">
                </div>
                <input type='submit' value='submit' name='submit'>
            </form>
        </main>
    </div>
</div>

<?php
include 'layout/footer.php';