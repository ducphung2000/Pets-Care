<!-- Danh mục sp -->
<?php
    $sql = "select * from products ";
    $result = $connect->query($sql);
?>
<nav class="categogy">
    <h3 class="category__heading">
        Danh mục
    </h3>

    <ul class="categogy-list">
        <li class="categogy-item categogy-item--active">
            <a  class="categogy-item__link"> Tất cả vật phẩm</a>
        </li>
        <?php
        $sql = "SELECT * FROM categories";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<li class="categogy-item"><a class="categogy-item__link" >' . $row["category_name"] . '</a></li>';
            }
        }
        ?>
    </ul>
</nav>