
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
   
        let origImage = e.target.parentNode.parentNode.parentNode.previousElementSibling.src;
        
        // alert(posterImage);
          
        popupImage.src = origImage;
      

        pbutton.addEventListener('click', ()=> {
            pbuttonIsClicked = true;

            if (pbuttonIsClicked) {
                pop.style.display = "none";
                // enableScroll()
              
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
