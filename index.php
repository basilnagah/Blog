<?php require_once('inc/header.php'); ?>
<?php require_once('inc/conn.php'); ?>

<?php
$query = "SELECT * FROM posts ";
$result = mysqli_query($conn, $query);
$posts = [];
session_start();

if (mysqli_num_rows($result) > 0) {
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <h2>All Posts</h2>



    <?php if ($posts) { ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created_at</th>
                    <th>Show</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($posts as $post) {
                ?> <tr>
                        <td><?php echo $post['id'] ?></td>
                        <td><?php echo $post['title'] ?></td>
                        <td><?php echo $post['content'] ?></td>
                        <td><?php echo $post['created_at'] ?></td>
                        <td>
                            <a href="./viewPost.php?id=<?php echo $post['id'] ?>" class="btn btn-primary">Show</a>
                        </td>
                        <td>
                            <a href="./updatePost.php?id=<?php echo $post['id'] ?>" class="btn btn-warning">update</a>
                        </td>
                        <td>
                            <a href="./handle/handleDeletePost.php?id=<?php echo $post['id'] ?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php     }
                ?>

            </tbody>
        </table>

    <?php } else {
    ?>
        <h2 class="alert alert-danger"><?php echo 'no posts found' ?></h2>
    <?php
    } ?>
</div>


<?php require_once('inc/footer.php'); ?>