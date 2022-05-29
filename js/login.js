const form = document.querySelector('.signin');
const formBtn = document.querySelector('#login-btn');
const error = document.querySelector('.error');

form.onsubmit = (e) => {
  e.preventDefault(); 
}

formBtn.onclick = () => {
  // Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "./php/signin.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        
        if (data == 'success') {
          location.href = 'index.php';
        }
        else {
          error.style.display = 'block';
          error.innerHTML = data;
        }
      }
    }
  }
  
  let formData = new FormData(form);
  xhr.send(formData);
}

