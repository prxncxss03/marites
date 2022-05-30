
const commentReax = document.querySelectorAll('.comment-reaction');
const pop = document.querySelector('.pop-up-content-wrapper');
const pbutton = document.querySelector('.pop-up-btn-exit');
const body = document.querySelector(".body");
const popupImage = document.querySelector(".pop-up-image");
const origImageSrc = document.querySelectorAll(".main-post-image");
const commentPostButton = document.querySelectorAll(".post-button");
const commentInput = document.querySelectorAll(".comment-section");

commentReax.forEach(comment => {
    
    comment.addEventListener("click",
    (e)=> {
        pop.style.display = "flex";
        
        let pbuttonIsClicked = false;
        disableScroll();
        let origImage = e.target.parentNode.parentNode.parentNode.previousElementSibling.src;
        
        // alert(posterImage);
          
        popupImage.src = origImage;
      

        pbutton.addEventListener('click', ()=> {
            pbuttonIsClicked = true;

            if (pbuttonIsClicked) {
                pop.style.display = "none";
                enableScroll()
              
            }
        })

    })


})

