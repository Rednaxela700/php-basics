<?php
if (isset($_REQUEST['name'])) {
    echo htmlentities($_REQUEST['name'] . '<br>' . $_REQUEST['email']); //html wont work when typed
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Bootstrap Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="row">
    <div class="col-sm-6">
        <form action="index.php" method="post" class="container">
            <div class="input-group-prepend m-4">
                <label for="name" class="col-form-label px-2">Name</label><input type="text" name="name"
                                                                                 class="input-group px-2">
            </div>
            <div class="input-group-prepend m-4">
                <label for="email" class="col-form-label px-2">Email</label><input type="email" name="email"
                                                                                   class="input-group px-2">
            </div>
            <button class="btn btn-primary d-block mx-auto">submit</button>
        </form>
        <a href="index.php?name=Alexander" class="page-link">Alexander</a>
        <a href="index.php?name=Roy" class="page-link">Roy</a>
    </div>
    <?php
    $username = $_GET["name"];
    if (isset($username)) {
        echo "<h1 class='h1'>This is $username profile</h1>";
    }
    ?>
</div>

</body>
</html>
