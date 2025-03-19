<?php
require_once('../inc/conn.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    if (!empty($title) && !empty($content)) {
        $query = "INSERT INTO posts (title, content, created_at) VALUES ('$title', '$content', NOW())";
        if (mysqli_query($conn, $query)) {
            $_SESSION['message'] = "post added successfully";
            header("Location: ../index.php");
            exit();
        } else {
            $_SESSION['error'] = "error ouccured";
            header("Location: ../addPost.php");
        }
    } else {
        $_SESSION['error'] = "all inputs is required";
        header("Location: ../addPost.php");
    }
} else {
    header('location:../addPost.php');
}
