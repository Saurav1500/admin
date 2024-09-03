<!-- <?php
session_start();
if (!isset($_SESSION['ID'])) {
    header('Location:login.php');
    exit();
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>

<body>
    <div class="container">

        <!-- aside section -->
        <?php include_once '../includes/dash.php'; ?>
        <!-- aside section end -->

        <!-- main section -->

        <main>

            <div class="logout">
                <h2>Welcome,
                    <span class="admin_name" name="admin_name"></span>
                    <a href="logout.php"><span class="material-symbols-outlined">logout</span>
                    </a>
                </h2><br><br>
                <h4>Search Status</h4><br>
            </div>
            <div class="search">
                <input type="text" id="search_seat"><button><span class="material-symbols-outlined">
                        search</span></button>
            </div>
        </main>
</body>

</html>