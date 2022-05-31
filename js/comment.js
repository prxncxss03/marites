const form = document.querySelector('#commentForm');
const formBtn = document.querySelector('.post-button');
const commentContainer = document.querySelector('.comment-container');
const commentInput = document.querySelector('.comment-section');

form.onsubmit = (e) => {
  e.preventDefault(); 
}


formBtn.onclick = () => {
  // Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "./php/add_comment.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        
        if (data == 'success') {
          commentInput.value = "";
        }
      }
    }
  }
  
  let formData = new FormData(form);
  xhr.send(formData);
}

setInterval(() => {
    let xhr = new XMLHttpRequest(); 
    xhr.open("GET", "./php/display_comment.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          commentContainer.innerHTML = data;
        }
      }
    }
    xhr.send();
}, 1000);
