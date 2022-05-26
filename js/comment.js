const commentReax = document.querySelectorAll('.comment-reaction');
const pop = document.querySelector('.pop-up-content-wrapper');
const pbutton = document.querySelector('.pop-up-btn-exit');
commentReax.forEach(comment => {
    comment.addEventListener("click",
    ()=> {
        pop.style.display = "flex";
        disableScroll()
        let pbuttonIsClicked = false;

        pbutton.addEventListener('click', ()=> {
            pbuttonIsClicked = true;

            if (pbuttonIsClicked) {
                pop.style.display = "none";
                enableScroll();
            }
        })
        


        
    })
})
function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  
        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
  
function enableScroll() {
    window.onscroll = function() {};
}