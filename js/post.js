const form = document.querySelector('.create-post-form');
const formBtn = document.querySelector('.create-image-post-btn');
const error = document.querySelector('.error');

form.onsubmit = (e) => {
  e.preventDefault(); 
}

formBtn.onclick = () => {
  // Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "./php/post.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        
        if (data == 'success') {
          window.location.reload();
        }
        else {
          error.style.display = 'block';
          error.innerHTML = data;
        }

        console.log(data);
      }
    }
  }
  
  let formData = new FormData(form);
  xhr.send(formData);
}

