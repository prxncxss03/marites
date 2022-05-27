const createPost = document.querySelector('.create-post-btn');
const createPostPop = document.querySelector('.pop-up-create-post-wrapper');
const createExit = document.querySelector('.create-pop-up-btn-exit');
const body2 = document.querySelector(".body");

createPost.addEventListener('click', ()=> {
    createPostPop.style.display = "flex";
    body2.style.overflow = "hidden";

    createExit.addEventListener('click', ()=> {
        createPostPop.style.display = "none";
        body2.style.overflow = "auto";
    })
})