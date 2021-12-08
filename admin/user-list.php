<?php
session_start();
require_once 'connect.php';
include 'layout/header.php';
$connect = ConnectDB();
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
        <a href="create-user-template.php" class="btn btn-danger">Create Acount</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>username/email</th>
              <th>password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              
              if( isset( $_POST['delete'] ) ) {
                  $id = $_POST['id'];
                  $query = "DELETE FROM users WHERE id=".$id;
                  $connect->query($query);
              }
              $sql = "SELECT * FROM users";
              $result = $connect->query($sql);

              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo "<tr>
                              <td>".$row['id']."</td>
                              <td>".$row['username']."</td>
                              <td>".$row['password']."</td>
                              <td> 
                                <form method='POST'>
                                <input type=hidden name=id value=".$row["id"]." >
                                <input type=submit value=Delete name=delete >
                                </form>
                              </td>
                            </tr>";
                  }
              } else {
                  echo "Chưa có user nào!";
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
