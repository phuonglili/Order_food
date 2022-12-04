let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.products-container .product').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});


// Hủy
function toast({
  title = '',
  message = '',
  type = 'success',
  duration = 3000
}) {
      const main = document.getElementById('toast');
      if (main) {
          const toast = document.createElement('div');
          const icons = {
              success: 'fas fa-check-circle',
              info: 'fas fa-info-circle',
              warning: 'fas fa-exclamation-circle',
              error: 'fas fa-exclamation-circle',
          }
          const icon = icons[type];
          toast.classList.add('toast', `toast--${type}`);
          toast.innerHTML = `
          <div class="toast__icon">
                  <i class="${icon}"></i>
              </div>
              <div class="toast__body">
                  <h3 class="toast__title">${title}</h3>
                  <p class="toast__msg">${message}</p>
              </div>
              <div class="toast__close">
                  <i class="fas fa-times"></i>
              </div>
          </div>
          `;
          main.appendChild(toast);
      }

}
function showSuccessToast() {
  toast({
      title: 'Thông báo',
      message: 'Bạn đã đặt hàng thành công!',
      type: 'success',
      duration: 3000
  });
}
function showErrorToast(){
  toast({
      title: 'Thông báo',
      message: 'Có lỗi xảy ra',
      type: 'error',
      duration: 3000
  });
}

let loginForm = document.querySelector('.login-form-container');
document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
    loginForm.classList.remove('active');
}


let signupForm = document.querySelector('.signup-form-container');
document.querySelector('#sign-up').onclick = () =>{
    signupForm.classList.toggle('active');
}

document.querySelector('#close-signup-btn').onclick = () =>{
    signupForm.classList.remove('active');
}
