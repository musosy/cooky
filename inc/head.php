<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST" && !empty($_POST['logout'])) {
    session_destroy();
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Cookie Factory</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/styles.css"/>
</head>
<body>
<header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
                    <h1>The Cookies Factory</h1>
                </a>
            </div>
                

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Chocolates chips</a></li>
                    <li><a href="#">Nuts</a></li>
                    <li><a href="#">Gluten full</a></li>
                    <li>
                        <a href=<?php echo isset($_SESSION['cart']) ? "/cart.php" : "/" ?> class="btn btn-warning navbar-btn">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Cart
                        </a>
                    </li>
                </ul>
                <form method="POST">
                        <?php if (!isset($_SESSION['name'])) { ?>
                            <a href="login.php" class="btn btn-primary">Login</a>
                        <?php } else { ?>
                            
                                <input name="logout" type="submit" value="Logout" class="btn btn-primary">
                            
                        <?php } ?>
                        </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid text-right">
        <strong>Hello <?php echo !empty($_SESSION['name']) ? $_SESSION['name'] : "Wilder" ?>!</strong>
    </div>
</header>
