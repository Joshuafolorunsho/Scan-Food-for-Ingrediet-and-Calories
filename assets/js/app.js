const validateBtn = document.querySelector('#validate');
const form = document.querySelector('#subscribe-form');
const notifyBtn = document.querySelector('#notify-me');
const emailInput = document.querySelector('#email');


notifyBtn.addEventListener('click', () => {
   form.classList.add('d-block');
   notifyBtn.classList.add('d-none');
});

function validateEmail(email) {
   const re = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/gi;
   return re.test(email);
 }
 
 function validate() {
   const $result = $("#result");
   const email = $("#email").val();
   $result.text("");
 
   if (validateEmail(email)) {
     $result.text("Successful. We'll notify you when our app is launched");
     $result.css("color", "green");
     setTimeout(() => {
      $result.css('display', 'none');
     }, 2000)
   } else {
      if (email.length == 0) {
         $result.text('Field cannot be left empty, try again')
         $result.css("color", "red");
         setTimeout(() => {
            $result.text('');
           }, 2000)
      } else {
         $result.text("Invalid email, try again");
         $result.css("color", "red");
         setTimeout(() => {
            $result.css('display', 'none');
           }, 2000);
      }
   }
   return false;
 }

form.addEventListener('submit', (event) => {
   event.preventDefault();
   validate();
})