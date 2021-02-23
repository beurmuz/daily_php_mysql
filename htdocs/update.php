<?php
    require('lib/print.php');
    require('view/top.php');
?>
    <a href = "create.php">create</a>
    <?php
        if(isset($_GET['id'])) {
            ?> 
            <!-- a태그는 id값이 있어야만 출력됨 -->
            <a href="update.php?id=<?=$_GET['id']; ?>">update</a>
            <?php
        }
    ?>
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>"/>
        <p>
            <input type="text" name="title" placeholder="Title" value="<?php print_title();?>"/>
        </p>
        <p>
            <textarea name="description" placeholder="Description"><?php print_description();?></textarea>
        </p>
        <p>
            <input type="submit" value="Submit" />
        </p>
    </form>
    <?php
    require('view/bottom.php');
?>