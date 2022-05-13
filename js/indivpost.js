const captionMsg = document.querySelectorAll('.poster-message');

captionMsg.forEach(msg => {       
        let str = msg.textContent;
        if (str.length > 320) {
            let result = str.slice(0,320);
            msg.innerHTML = result;
        }
}
)