const captionMsg = document.querySelectorAll('.poster-message');
const google_translate_element = document.getElementById('google_translate_element');

captionMsg.forEach(msg => {       
        let str = msg.textContent;
        if (str.length > 320) {
            let result = str.slice(0,320);
            msg.innerHTML = result;

            let addEllipsis = document.createTextNode("...");
            msg.append(addEllipsis);
            let moreBtn = document.createElement("button");
            msg.append(moreBtn);
            moreBtn.innerText = "more";
            moreBtn.classList.add("more-btn");

            moreBtn.addEventListener('click', ()=> {

                msg.innerHTML = str;
                moreBtn.style.display = 'none';
            })
            
            
        } 
        else if (str.length > 500) {
            let result = str.slice(0,500);
            msg.innerHTML = result;

            let addEllipsis = document.createTextNode("...");
            msg.append(addEllipsis);
            let moreBtn = document.createElement("button");
            msg.append(moreBtn);
            moreBtn.innerText = "more";
            moreBtn.classList.add("more-btn");

            moreBtn.addEventListener('click', ()=> {

                msg.innerHTML = str;
                moreBtn.style.display = 'none';
            })
            
            
        } 
}
)

function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }