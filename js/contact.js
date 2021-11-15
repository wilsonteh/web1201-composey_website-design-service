let body = document.body;
let form = document.querySelector('#contact-form');
let formSubmitBtn = document.querySelector('.submit-btn');
let modalOverlay = document.querySelector('.dialog-overlay');
let modalCloseBtn = document.querySelector('.close-btn');
let modalConfirmBtn = document.querySelector('.confirm-btn');

console.log(modalOverlay);

function closeModal(e) {
   /* target --> element where event occured
   currentTarget --> element which the handle handler (addEventListener) is attached to */
   if (e.target === e.currentTarget) {
      console.log("Close modal");
      modalOverlay.style.display = 'none';
      body.style.overflow = 'scroll';
   }
}

function disableBodyScroll() {
   if (!modalOverlay) return;

   let isModalVisible = window.getComputedStyle(modalOverlay).display === 'block';
   
   if (isModalVisible) {
      body.style.overflow = 'hidden';
   } else {
      body.style.overflow = 'auto';
   }
}

function checkNullAndExecute(element, execution) {
   // if element is NOT NULL, apply event listener to that element
   if (element) {
      
   } 
}

disableBodyScroll();

modalCloseBtn.addEventListener('click', e => closeModal(e));
modalConfirmBtn.addEventListener('click', e => closeModal(e));
modalOverlay.addEventListener('click', e => closeModal(e));

