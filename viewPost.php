<?php 
require_once('inc/header.php');
require_once('inc/conn.php');
session_start();

if (isset($_GET['id'])) {
    
    $post_id = intval($_GET['id']); 
    $query = "SELECT * FROM posts WHERE id = $post_id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $post = mysqli_fetch_assoc($result);
    } else{
        $_SESSION['error'] = "post not found";
        header("Location: index.php");
        exit();
    }
    
}
?>





<nav class="bg-body-secondary py-2">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Blog</h1>
            <a href="./addPost.php" class="text-decoration-none btn btn-primary"> add Post </a>
        </div>
    </div>
</nav>

<div class="container py-5">

    <?php
    echo isset($_SESSION['message']) ? "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>" : "";
    unset($_SESSION['message']);

    echo isset($_SESSION['error']) ? "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>" : "";
    unset($_SESSION['error']);
    ?>
    <h2>show Post</h2>


    <div class="mt-5">
        <h5>title: </h5> <span><?php echo $post['title']?></span>
        <h5>content: </h5> <span><?php echo $post['content']?></span>
        <h5>created at: </h5> <span><?php echo $post['created_at']?></span>
    </div>

 
</div>


<?php require_once('inc/footer.php'); ?>