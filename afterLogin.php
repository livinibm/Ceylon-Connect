<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/afterLogin.css">
</head>
<body>
<header>
    <div class="header">
 <?php include('includes/header.php'); ?>
 
    </div>
   
    <div class="header-container-home">
        <div class="header-text">
            <h1 class="header-welcome-title">Welcome, User!</h1>
            <h1 class="header-title">A Barter-Based Platform </h1>
            <h1 class="header-title-main">for Sharing ICT </h1>
            <h1 class="header-title">Skills and Goods</h1>
            <div class="header-welcome-button-container">
                <button class="landing-page-button">Check Your Messages</button>
                <button class="landing-page-button">View Your Reviews</button>
            </div>
        </div>
        <div>
            <img class="header-image" src="../assets/images/BG IMG.png" alt="">
        </div>
    </div>

    <div class="header-container-points">

    <div class="header-container-browse">
        <button onClick="window.location.href='search.php'" class='browse-button'>
        <div>
            <img class="header-browser-image" src="../assets/images/Ellipse1.png" alt="">
        </div>
        <div class="header-container-details-browse">
            <h1 class="header-browser-title">Browse List</h1>
        <p class="header-browser-subtitle">Search for skills and goods</p>
        </div>
        </button>
    </div>


    <div class="header-container-browse">
        <div>
            <img class="header-browser-image" src="../assets/images/Ellipse2.png" alt="">
        </div>
        <div class="header-container-details-browse">
            <h1 class="header-browser-title">Make Exchanges</h1>
        <p class="header-browser-subtitle">Connect with other users</p>
        </div>
    </div>


    <div class="header-container-browse">
        <div>
            <img class="header-browser-image" src="../assets/images/Ellipse3.png" alt="">
        </div>
        <div class="header-container-details-browse">
            <h1 class="header-browser-title">Leave Ratings</h1>
        <p class="header-browser-subtitle">Rate your exchange experiences</p>
        </div>
    </div>

    <div class="header-container-browse">
        <div>
            <img class="header-browser-image" src="../assets/images/Ellipse4.png" alt="">
        </div>
        <div class="header-container-details-browse">
            <h1 class="header-browser-title">Browse List</h1>
        <p class="header-browser-subtitle">Search for skills and goods</p>
        </div>
    </div>
    </div>

    <?php include('includes/footer.php'); ?>
</header>  
</body>
</html>         
