const createPost = document.querySelector('.create-post-btn');
const createPostPop = document.querySelector('.pop-up-create-post-wrapper');
const createExit = document.querySelector('.create-pop-up-btn-exit');

createPost.addEventListener('click', ()=> {
    createPostPop.style.display = "flex";

    createExit.addEventListener('click', ()=> {
        createPostPop.style.display = "none";
    })
})