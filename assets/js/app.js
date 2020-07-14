const validateBtn = document.querySelector('#validate');
const form = document.querySelector('#subscribe-form');
const notifyBtn = document.querySelector('#notify-me');
const emailInput = document.querySelector('#email');


notifyBtn.addEventListener('click', () => {
   form.classList.add('d-block');
   notifyBtn.classList.add('d-none');
});

function validateEmail(email) {
   const re = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;
   return re.test(email);
 }
 
 function validate() {
   const $result = $("#result");
   const email = $("#email").val();
   $result.text("");
 
   if (validateEmail(email)) {
     $result.text(email + " is valid :)");
     $result.css("color", "green");
   } else {
      if (email.length == 0) {
         $result.text('Field cannot be left empty')
         $result.css("color", "red");
      } else {
         $result.text(email + " is not valid :(");
         $result.css("color", "red");
      }
   }
   return false;
 }

form.addEventListener('submit', (event) => {
   event.preventDefault();
   validate();
})