const editProfileBtn = document.querySelector(".edit-profile-btn");
const body3 = document.querySelector(".pop-cover3");
const exitBtn = document.querySelector(".exit2");

editProfileBtn.addEventListener("click", ()=>{
    body3.style.display = "flex";

    exitBtn.addEventListener("click", ()=>{
        body3.style.display = "none";
    })
})