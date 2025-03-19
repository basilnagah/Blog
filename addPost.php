<?php
require_once('inc/header.php');
require_once('inc/conn.php');
session_start();
?>


<nav class="bg-body-secondary py-2">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Blog</h1>
            <a href="./index.php" class="text-decoration-none btn btn-primary"> View Post </a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h2>Add Posts</h2>

    <?php 
        echo isset($_SESSION['error']) ? "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>" : "";
        unset($_SESSION['error']); 

    ?>




    <form action="./handle/handleAddPost.php" method="post">
        <input type="text" class="form-control mt-3" placeholder="post title" name="title">
        <textarea type="text" class="form-control mt-3" placeholder="post conent" name="content"></textarea>

        <button type="submit" class="btn btn-primary mt-4">Add post</button>
    </form>
</div>

<?php require_once('inc/footer.php'); ?>