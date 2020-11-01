<?php require APPROOT . "/views/inc/header.php"; ?>

<h1><?php echo $data["title"] ?></h1>

<?php
foreach ($data["posts"] as $post) {
    echo "<p>" . $post->title . "</p>";
}
?>

<?php require APPROOT . "/views/inc/footer.php"; ?>