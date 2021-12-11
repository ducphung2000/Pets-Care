<li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate js-register-btn">
    <a href="./account/register/register.php" class="header__navbar-item header__navbar-item--strong">Đăng ký</a>
</li>
<li class="header__navbar-item header__navbar-item--strong js-login-btn">
    <a href="./account/login/login.php" class="header__navbar-item header__navbar-item--strong">Đăng nhập</a>
</li>
<?php 
    // // Form account
    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    // }else{
    //     $id = '';
    // }
    // $sql = "SELECT * FROM users WHERE id = '$id'";
    // $result = $connect->query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo '
    //             <li class="header__navbar-item header__navbar-user">
    //                 <img src="./public/img/balo.jfif" alt="" class="header__navbar-user-img">
    //                 <span class="header__navbar-user-name">'.$row['username'].'</span>

    //                 <ul class="header__navbar-user-menu">
    //                     <li class="header__navbar-user-item">
    //                         <a href="user.php">Tài khoản của tôi</a>
    //                     </li>
    //                     <li class="header__navbar-user-item">
    //                         <a href="">Địa chỉ của tôi</a>
    //                     </li>
    //                     <li class="header__navbar-user-item">
    //                         <a href="">Đơn mua</a>
    //                     </li>
    //                     <li class="header__navbar-user-item header__navbar-user-item--separate">
    //                         <a href="./account/login/logout.php">Đăng xuất</a>
    //                     </li>
    //                 </ul>
    //             </li>
    //         ';
    //     }
    // }else{
    //     echo '
    //         <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate js-register-btn">
    //         <a href="./account/register/register.php" class="header__navbar-item header__navbar-item--strong">Đăng ký</a>
        
    //         </li>
    //         <li class="header__navbar-item header__navbar-item--strong js-login-btn">
    //             <a href="./account/login/login.php" class="header__navbar-item header__navbar-item--strong">Đăng nhập</a>
    //         </li>
    //     ';
    // }
?>
