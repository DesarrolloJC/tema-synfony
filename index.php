<!doctype html>
<html lang="en">

<head>

    <?php include './head.php';?>

</head>

<body class="app sidebar-mini ltr light-mode">

    

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="./assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <?php include './header.php';?>

            <?php include './content.php'; ?>

        </div>

        <?php include './config.php';?>

        <?php include './footer.php';?>

    </div>

    <?php include './js.php';?>

</body>

</html>