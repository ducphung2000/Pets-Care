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
      <a href="create-product-template.php" class="btn btn-danger">Order List</a>

      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>name</th>
              <th>phone</th>
              <th>address</th>
              <th>note</th>
              <th>total</th>
              <th>create_at</th>
              <th style="text-align: center;">Xoá</th>
            </tr>
          </thead>
          <tbody>
          <?php
          

          if( isset( $_POST['delete'] ) ) {
              $id = $_POST['id'];
              $query = "DELETE FROM orders WHERE id=".$id;
              $conn->query($query);
          }
          
          $sql = "SELECT * FROM orders";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>".$row['id']."</td>
                          <td >".$row['name']."</td>
                          <td>".$row['phone']."</td>
                          <td>".$row['address']."</td>
                          <td "?> class="hidden_text" <?php echo ">".$row['note']."</td>
                          <td>".$row['total']."đ</td>
                          <td>".$row['create_at']."</td>
                          <td "?> style="text-align: center;" <?php echo " > <form method='POST'>
                                <input type=hidden name=id value=".$row["id"]." >
                                <input type=submit value=Xoá name=delete >
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
