<?php
require_once('inc/header.php');
require_once('inc/conn.php');
session_start();

if (!isset($_GET['id'])) {
    $_SESSION['message'] = "Invalid post ID!";
    header("Location: ../index.php");
}

$post_id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = $post_id";
$result = mysqli_query($conn, $query);
$post = mysqli_fetch_assoc($result);

if (!$post) {
    $_SESSION['error'] = "Post not found!";
    header("Location: index.php");
    exit();
}
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
    <h2>Update Post</h2>

    <?php 
        echo isset($_SESSION['error']) ? "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>" : "";
        unset($_SESSION['error']); 

    ?>




    <form action="./handle/handleUpdatePost.php?id=<?php echo $post['id'] ?>" method="post">
        <input type="text" class="form-control mt-3" placeholder="post title" name="title" value="<?php echo $post['title'] ?>">
        <textarea type="text" class="form-control mt-3" placeholder="post conent" name="content"><?php echo $post['content'] ?></textarea>

        <button type="submit" class="btn btn-primary mt-4">Update post</button>
    </form>
</div>

<?php require_once('inc/footer.php'); ?>