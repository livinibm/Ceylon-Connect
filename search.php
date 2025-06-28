<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Barter Platform</title>
  <link rel="stylesheet" href="assets/css/header.css" />
  <link rel="stylesheet" href="assets/css/search.css" />
</head>

<body>
  <header>
    <div class="header">
      <?php include('includes/header.php'); ?>
    </div>

    <div class="search-select-wrapper">
      <div class="search-container">
        <p class="search-label">Search Skills</p>
        <input type="text" placeholder="Search for skills and goods..." />
      </div>

      <div class="select-container">
        <p class="select-category">Select a category</p>
        <select>
          <option>Browse List</option>
          <option>Post Listings</option>
          <option>Make Exchanges</option>
          <option>Leave ratings</option>
        </select>
      </div>

      <div class="search-button-container">
        <button class="search-page-go-button">Go Now</button>
        <button class="search-page-cancel-button" onClick="window.location.href='afterLogin.php'">Cancel</button>
      </div>
    </div>
  </header>

  <div class="main-content">
    <div class="header-container-home">
      <div class="header-text">
        <h1 class="header-welcome-title">Welcome, User!</h1>
        <h1 class="header-title">A Barter-Based Platform</h1>
        <h1 class="header-title-main">for Sharing ICT</h1>
        <h1 class="header-title">Skills and Goods</h1>

        <div class="header-welcome-button-container">
          <button class="landing-page-button">Check Your Messages</button>
          <button class="landing-page-button">View Your Reviews</button>
        </div>
      </div>

      <div>
        <img class="header-image" src="../assets/images/BG IMG.png" alt="Background Image" />
      </div>
    </div>

    <div class="header-container-points">
      <!-- Browse List -->
      <div class="header-container-browse">
        <div>
          <img class="header-browser-image" src="../assets/images/Ellipse1.png" alt="" />
        </div>
        <div class="header-container-details-browse">
          <h1 class="header-browser-title">Browse List</h1>
          <p class="header-browser-subtitle">Search for skills and goods</p>
        </div>
      </div>

      <!-- Make Exchanges -->
      <div class="header-container-browse">
        <div>
          <img class="header-browser-image" src="../assets/images/Ellipse2.png" alt="" />
        </div>
        <div class="header-container-details-browse">
          <h1 class="header-browser-title">Make Exchanges</h1>
          <p class="header-browser-subtitle">Connect with other users</p>
        </div>
      </div>

      <!-- Leave Ratings -->
      <div class="header-container-browse">
        <div>
          <img class="header-browser-image" src="../assets/images/Ellipse3.png" alt="" />
        </div>
        <div class="header-container-details-browse">
          <h1 class="header-browser-title">Leave Ratings</h1>
          <p class="header-browser-subtitle">Rate your exchange experiences</p>
        </div>
      </div>

      <!-- Browse List Again (Optional Duplicate) -->
      <div class="header-container-browse">
        <div>
          <img class="header-browser-image" src="../assets/images/Ellipse4.png" alt="" />
        </div>
        <div class="header-container-details-browse">
          <h1 class="header-browser-title">Browse List</h1>
          <p class="header-browser-subtitle">Search for skills and goods</p>
        </div>
      </div>
    </div>

    <?php include('includes/footer.php'); ?>
  </div>
</body>
</html>
