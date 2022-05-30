const createPost = document.querySelector('.create-post-btn');
const createPostPop = document.querySelector('.pop-up-create-post-wrapper');
const createExit = document.querySelector('.create-pop-up-btn-exit');
const body2 = document.querySelector(".body");
const homeBtn = document.querySelector(".home-btn");
const stroke = document.querySelectorAll(".line-stroke");
const svgCreate = document.querySelector(".create-post-svg");

createPost.addEventListener('click', ()=> {
    createPostPop.style.display = "flex";
    disableScroll();
    svgCreate.style.fill = "black";
    homeBtn.style.fill = "none";
    stroke.forEach(st => {
        st.style.stroke = "white";
    })
    

    createExit.addEventListener('click', ()=> {
        createPostPop.style.display = "none";
        body2.style.overflow = "auto";
        enableScroll();
        svgCreate.style.fill = "none";
        homeBtn.style.fill = "black";
        stroke.forEach(st => {
            st.style.stroke = "black";
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
