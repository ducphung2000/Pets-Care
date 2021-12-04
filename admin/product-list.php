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
        <a href="create-product-template.php" class="btn btn-danger">Thêm sản phẩm</a>
        <?php 
        echo '<pre>';
        print_r($_SESSION['products']);
        echo '</pre>';
          $mess = get_flash_session("mess_flash");
          if (!empty($mess)){
            ?>
            <div class="alert"><?php echo $mess ?></div>
            <?php
          }
        ?>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>name</th>
              <th>old_price</th>
              <th>price</th>
              <th>description</th>
              <th>discount</th>
              <!-- <th>image</th> -->
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if(!empty($_SESSION['products'])):
                $count = 0;
                foreach ($_SESSION['products'] as $key=>$value);
                  $count;
            ?>
            <tr>
              <td><?php echo $count; ?></td>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['old_price']; ?></td>
              <td><?php echo $value['price']; ?></td>
              <td><?php echo $value['category_id']; ?></td>
              <td><?php echo $value['desc']; ?></td>
              <td> <a href="edit-product.php?id=<?php echo $key; ?>" class="button">Edit</a></td>
              <td> <a href="delete-product.php?id=<?php echo $key; ?>" class="button">Del</a></td>
            </tr>
              <?php else: ?>
                <tr>
                  <td colspan="6" style="text-align: center;">Không có dữ liệu.</td>
                </tr>
              <?php endif; ?>

                          
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php
include 'layout/footer.php';
