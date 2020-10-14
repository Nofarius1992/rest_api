<?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="wrapper_card">
            <h2 class="card-title">
                <?php echo $row["name"] ?>
            </h2>
            <p class="card-text"><?php echo $row["price"] ?></p>
        </div>
        <?php
    }
?>