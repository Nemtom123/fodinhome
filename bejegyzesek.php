<?php
include ("includes/header.php");
if (isset($_GET['kategori'])){
    $kategoria = mysqli_real_escape_string($db , $_GET['kategori']);
    $leker = "SELECT * FROM posts WHERE kategori='$kategoria'";
} else {
    $leker = "SELECT * FROM posts";

}

$posts = $db->query($leker);
?>
    <br>
    <blockquote>Keresés</blockquote>
    <div class="blog-post">
        <h2 class="blog-post-title">Minden ami az élet</h2>
    </div>
<?php if ($posts->num_rows > 0) {
    while ($row = $posts->fetch_assoc()) {
        ?>
        <p class="blog-post-meta" style="color: #00a8c6"><?php echo $row['date']?><a href="single.php?post=<?php echo $row['id']?>" style="color: #00a8c6">
                <?php echo $row['author'] ?></a></p>

        <div class="comment">
            <?php echo $row['body'];
            echo substr($row['body'], 0, 400);
            ?>

        </div>
        <a href="<?php echo $row['posts_id']?>" class="btn btn-primary">Hozzászólás</a>
    <?php }}?>
    <nav>
        <ul class="pager">
            <li><a href="#" >Előző</a></li>
            <li><a href="#">Következő</a></li>
        </ul>
    </nav>
    </div>
<?php include ("include/sidebar.php"); ?>
    </div>
    </div>
<?php include ("include/footer.php"); ?>