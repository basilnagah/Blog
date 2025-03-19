<?php
include '../inc/conn.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post_id = intval($_GET['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    if (empty($title) || empty($content)) {
        $_SESSION['error'] = 'All fields are required!';
        header("Location: ../updatePost.php?id=$post_id");
        exit();
    }

    $query = "UPDATE posts SET title='$title', content='$content' WHERE id=$post_id";
    echo $query;
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['message'] = 'Post updated successfully!';
    } else {
        $_SESSION['error'] = 'Failed to update post';
    }

    header("Location: ../index.php");
    exit();
} else {
    $_SESSION['message'] = 'Invalid request!';
    header("Location: index.php");
    exit();
}

?>
