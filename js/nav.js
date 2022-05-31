const profilePic = document.querySelector('.profile-pic-container');
const navItemProfile = document.querySelector('.profile-view-content');
const navBanner = document.querySelector('.nav-banner');

profilePic.onclick = () => {
  navItemProfile.classList.toggle('active');
}

navBanner.onclick = () => {
  alert('test');
}

