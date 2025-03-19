<?php
include '../inc/conn.php';
session_start();

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    $query = "DELETE FROM posts WHERE id = $post_id";
    $result = mysqli_query($conn, $query);

    if($result){
        $_SESSION['message'] ="Post deleted successfully!";
    }else{
        $_SESSION['error'] = "Error deleting post" ;
    }

    header("Location: ../index.php"); 
} else {
    header("Location: ../index.php");
}
?>
