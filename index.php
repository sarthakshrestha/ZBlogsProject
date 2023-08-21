<?php include "includes/db.php"?>
<?php include "includes/nav.php"?>
<?php 
$query = "SELECT * FROM blogbody";
$select_blog = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_blog)) {
    $blog_title = $row['blog_title'];
    $blog_body = $row['blog_body'];
    $blog_date = $row['blog_date'];

?>

    <div class="content">
        <div class="blog-post">
            <h2 class="blog-title"><?php echo $blog_title?></h2>
            <p class="blog-body"><?php echo $blog_body?></p>
            <span class="blog-date">Posted on: <?php echo $blog_date?></span>
        </div>
    </div> 
    <?php } ?>
<?php include "includes/footer.php"?>
