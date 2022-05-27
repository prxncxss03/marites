const createPost = document.querySelector('.create-post-btn');
const createPostPop = document.querySelector('.pop-up-create-post-wrapper');
const createExit = document.querySelector('.create-pop-up-btn-exit');
const body2 = document.querySelector(".body");
const homeBtn = document.querySelector(".home-btn");
const stroke = document.querySelectorAll(".line-stroke");
const svgCreate = document.querySelector(".create-post-svg");

createPost.addEventListener('click', ()=> {
    createPostPop.style.display = "flex";
    body2.style.overflow = "hidden";
    svgCreate.style.fill = "black";
    homeBtn.style.fill = "none";
    stroke.forEach(st => {
        st.style.stroke = "white";
    })
    

    createExit.addEventListener('click', ()=> {
        createPostPop.style.display = "none";
        body2.style.overflow = "auto";
        svgCreate.style.fill = "none";
        homeBtn.style.fill = "black";
        stroke.forEach(st => {
            st.style.stroke = "black";
        })
    })
})