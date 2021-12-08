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
      <a href="create-product-template.php" class="btn btn-danger">Create product</a>

      
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
              <th>image</th>
              <th>Sửa</th>
              <th>Xoá</th>
            </tr>
          </thead>
          <tbody>
          <?php
          

          if( isset( $_POST['delete'] ) ) {
              $id = $_POST['id'];
              $query = "DELETE FROM products WHERE id=".$id;
              $conn->query($query);
          }
          
          $sql = "SELECT * FROM products";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>".$row['id']."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['old_price']."</td>
                          <td>".$row['price']."</td>
                          <td>".$row['description']."</td>
                          <td>".$row['discount']."</td>
                          <td>".$row['image']."</td>
                          "?>
                          <td> <a href="edit-product.php?id=<?php echo $row["id"] ?>" class="button">Edit</a></td>
                          <?php 
                          echo "
                          <td> <form method='POST'>
                                <input type=hidden name=id value=".$row["id"]." >
                                <input type=submit value=Delete name=delete >
                                </form>
                          </td>
                        </tr>";
              }
          } else {
              echo "Chưa có dữ liệu!!!";
          }
          ?>
                          
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php
include 'layout/footer.php';
