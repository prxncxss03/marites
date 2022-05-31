<!-- NAVIGATION BAR -->
<div class="navigation-wrapper">

<nav class="navigation">
    <a href="./index.php" class="left-side-nav">
        <img class="logo" src="./images/loogo.svg" alt="logo">
    </a>
    <div class="right-side-nav">
        <ul class="nav-links">
            <li>
                <a href="./index.php">
                    <svg class="home-btn" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Home"  color="#262626" fill="black" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M9.005 16.545a2.997 2.997 0 012.997-2.997h0A2.997 2.997 0 0115 16.545V22h7V11.543L12 2 2 11.543V22h7.005z" stroke="#262626" stroke-linejoin="round" stroke-width="2px"></path></svg>
                </a>
            </li>
            <li>
                <div class="create-post-btn">
                    <svg  class="create-post-svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="New Post" fill="none" height="24" role="img" viewBox="0 0 24 24" width="24"><path   d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552z"  stroke="#262626" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px"></path><line class="line-stroke"  stroke="#262626" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line><line class="line-stroke" fill="none" stroke="#262626" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line></svg>
                </div>
            </li>
            <li style="position: relative;">
                <div class="profile-pic-container">
                  <img class="profile-pic" src="./images/profile/<?php echo $profile_image?>" alt="User profile">
                </div>
                <div class="profile-view-content">
                    <a href="./profile.php?user_id=<?php echo $_SESSION["user_id"] ?>" class="content-item">
                        <span class="profile-svg"><svg aria-label="Profile" class="_8-yf5 " color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 24 24" width="16"><circle cx="12.004" cy="12.004" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></circle><path d="M18.793 20.014a6.08 6.08 0 00-1.778-2.447 3.991 3.991 0 00-2.386-.791H9.38a3.994 3.994 0 00-2.386.791 6.09 6.09 0 00-1.779 2.447" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></path><circle cx="12.006" cy="9.718" fill="none" r="4.109" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></circle></svg></span>
                        <span class="profile-svg"></span>
                        <span>Profile</span>
                    </a>
                    <a href="#" class="content-item">
                        <span class="profile-svg"><svg aria-label="Saved" class="_8-yf5 " color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 24 24" width="16"><polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon></svg></span>
                        <span class="profile-svg"></span>
                        <span>Saved</span>
                    </a>
                    <form action="./php/logout.php" class="content-item">
                        <button class="logout-btn">Log Out</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<script src="./js/nav.js"></script>
</div>
<!-- END OF NAVIGATION BAR -->