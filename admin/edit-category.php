<?php
session_start();
require_once 'connect.php';
include 'layout/header.php';
$connect = ConnectDB();
$sql = "SELECT*FROM categories"

?>
<div class="container-fluid">
    <div class="row">
        <?php
        include 'layout/menu.php';
        ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Category</h1>

            </div>
            <div class="table-responsive">
                <h1>Admin</h1>
            </div>
            <?php
                if(isset($_GET['id'])){
                $id = $_GET['id'];
                }
                else{
                    $id = "";
                }
               
                    $sql = "SELECT * FROM categories WHERE id =$id ";
                    $result = $connect->query($sql);
                    // } 
                    
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '
                                <form action="edit-category-submit.php" method="post">
                                    <input name="id" type="hidden" value="'.$row["id"].'">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên category</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên danh mục" value="'.$row["category_name"].'">
                                        
                                    </div>'?>
                                    <input type='submit' value='submit' name='save'>
                                    <?php echo '
                                </form>
                            ';}
                        }
                // }
            ?>
        </main>
    </div>
</div>

<?php
include 'layout/footer.php';