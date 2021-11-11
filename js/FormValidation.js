let contactForm = document.querySelector('#contact-form');
let nameInp = document.querySelector('#name-field');
let salutationInp = document.querySelector('#salutation-field');
let companyInp = document.querySelector('#company-field');
let emailInp = document.querySelector('#email-field');
let phoneInp = document.getElementById('phone-field');
let preferredContactInp = document.getElementsByName('preferredContact');
let messageInp = document.getElementById('message-field');


let nameMsg = document.getElementById('name-error');
let salutationMsg = document.getElementById('salutation-error');
let companyMsg = document.getElementById('company-error');
let emailMsg = document.getElementById('email-error');
let phoneMsg = document.getElementById('phone-error');
let preferredMsg = document.getElementById('preferred-error');
let messageMsg = document.getElementById('msg-error');

let purple = 'hsl(263, 77%, 62%)';
let successColor = 'hsl(133, 61%, 40%)';
let errorColor = 'hsl(0, 80%, 60%)';

/** 
 * element - html element
 * input - field data that is being input 
 */
function validateName(element, input) {
   if (input.trim().length === 0) {
      nameMsg.innerHTML = "Name cannot be left blanked";
      element.style.border = 'none';
      element.style.borderBottom = `2px solid ${errorColor}`;
      
   } else {
      nameMsg.innerHTML = "";
      element.style.border = 'none';
      element.style.borderBottom = `2px solid ${purple}`;
   }
}

function validateSalutation(element, input) {
   if (input === "") {
      salutationMsg.innerHTML = "Please select a salutation";
      element.style.border = 'none';
      element.style.borderBottom = `2px solid ${errorColor}`;
      
   } else {
      salutationMsg.innerHTML = "";
      element.style.border = 'none';
      element.style.borderBottom = `2px solid ${purple}`;
   }
}

function validateEmail(element, input) {
   if (input.trim().length === 0) {
      emailMsg.innerHTML = "Email cannot be left blanked";
      element.style.border = 'none';
      element.style.border = `2px solid ${errorColor}`;

   } else if (!input.includes('@') || !input.includes('.')) {
      emailMsg.innerHTML = "Please enter a valid email";
      element.style.border = 'none';
      element.style.border = `2px solid ${errorColor}`;
      
   } else {
      emailMsg.innerHTML = "";
      element.style.border = 'none';
      element.style.border = `2px solid ${purple}`;
   }
}

function validatePhone(element, input) {
   if (input.trim().length === 0) {
      phoneMsg.innerHTML = "Phone number cannot be left blanked";
      element.style.border = 'none';
      element.style.border = `2px solid ${errorColor}`;
   }
   // check if total count of digit is < 10, by removing all non-digit char 
   else if (input.replace(/\D/ig, "").length < 10) {   
      phoneMsg.innerHTML = "Please enter a valid phone number";
      element.style.border = 'none';
      element.style.border = `2px solid ${errorColor}`;
   } 
   else {
      phoneMsg.innerHTML = "";
      element.style.border = 'none';
      element.style.border = `2px solid ${purple}`;
   }
}

function validateMsg(element, input) {
   if (input.trim().length === 0) {
      messageMsg.innerHTML = "Message cannot be left blanked";
      element.style.border = 'none';
      element.style.border = `2px solid ${errorColor}`;

   } else if (input.trim().length < 10) {
      messageMsg.innerHTML = "Message is too short";
      element.style.border = 'none';
      element.style.border = `2px solid ${errorColor}`;

   } else {
      messageMsg.innerHTML = "";
      element.style.border = 'none';
      element.style.border = `2px solid ${purple}`;
   }
}

nameInp.addEventListener('keyup', e => {
   validateName(e.target, e.target.value);
});

salutationInp.addEventListener('change', e => {
   validateSalutation(e.target, e.target.value);
});

emailInp.addEventListener('keyup', e => {
   validateEmail(e.target, e.target.value);
});

phoneInp.addEventListener('keyup', e => {
   validatePhone(e.target, e.target.value);
});

messageInp.addEventListener('keyup', e => {
   validateMsg(e.target, e.target.value);
});