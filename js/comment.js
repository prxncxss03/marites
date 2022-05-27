const commentReax = document.querySelectorAll('.comment-reaction');
const pop = document.querySelector('.pop-up-content-wrapper');
const pbutton = document.querySelector('.pop-up-btn-exit');
const body = document.querySelector(".body");
const popupImage = document.querySelector(".pop-up-image");
const origImageSrc = document.querySelectorAll(".main-post-image");

commentReax.forEach(comment => {
    
    comment.addEventListener("click",
    (e)=> {
        pop.style.display = "flex";
        
        let pbuttonIsClicked = false;
        body.style.overflow = "hidden";

        e.target.style.background = "blue";
        let origImage = e.target.parentNode.parentNode.parentNode.previousElementSibling.src;
          
        popupImage.src = origImage;
      

        pbutton.addEventListener('click', ()=> {
            pbuttonIsClicked = true;

            if (pbuttonIsClicked) {
                pop.style.display = "none";
                body.style.overflow = "auto";
              
            }
        })

    })
})
