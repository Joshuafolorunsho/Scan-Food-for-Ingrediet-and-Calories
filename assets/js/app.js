const validateBtn = document.querySelector("#validate");
const form = document.querySelector(".subscribe-form");
const notifyBtn = document.querySelector("#notify-me");
const emailInput = document.querySelector("#email");


// Activate Animate on scroll
AOS.init();

window.addEventListener('load', () => {
	loader.classList.add('none');
	document.body.classList.remove('hide-scroll-bar');
});

notifyBtn.addEventListener("click", () => {
  form.classList.remove("d-none");
  notifyBtn.classList.add("d-none");
});

function validateEmail(email) {
  const re = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/gi;
  return re.test(email);
}

function validate() {
  $result = $(".result");
  const email = $("#email").val();
  $result.text("");

  if (validateEmail(email)) {
    $result.text("Successful. We'll notify you when our app is launched");
    $result.css("color", "green");
    document.querySelector("input[type='email']").value = '';
    $result.css("font-size", "1.5rem");
    setTimeout(() => {
      $result.css("display", "none");
    }, 2000);
  } else {
    if (email.length == 0) {
      $result.text("Field cannot be left empty, try again");
      $result.css("color", "red");
      setTimeout(() => {
        $result.text("");
      }, 2000);
    } else {
      $result.text("Invalid email, try again");
      $result.css("color", "red");
      setTimeout(() => {
        $result.css("display", "none");
      }, 2000);
    }
  }
  return false;
}

form.addEventListener("submit", (event) => {
  event.preventDefault();
  validate();
  const emailInput = event.target.elements.email.value;
  
  fetch('index.php', {
    method: 'POST', 
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({email: emailInput}),
  })
  .then(response => {
    console.log(response.text())
    // response.json()
  })
  .then(data => {
    console.log('Success:', data);
  })
  .catch((error) => {
    console.error('Error:', error);
  });
  // notifyBtn.add('click',() => {
  //   window.addEventListener('load', () => {
  //     loader.classList.add('none');
  // })
});

/* Showcase */

const state = {};
const carouselList = document.querySelector(".carousel__list");
const carouselItems = document.querySelectorAll(".carousel__item");
const elems = Array.from(carouselItems);

carouselList.addEventListener("click", function (event) {
  var newActive = event.target;
  var isItem = newActive.closest(".carousel__item");

  if (!isItem || newActive.classList.contains("carousel__item_active")) {
    return;
  }

  update(newActive);
});

const update = function (newActive) {
  const newActivePos = newActive.dataset.pos;

  const current = elems.find((elem) => elem.dataset.pos == 0);
  const prev = elems.find((elem) => elem.dataset.pos == -1);
  const next = elems.find((elem) => elem.dataset.pos == 1);
  const first = elems.find((elem) => elem.dataset.pos == -2);
  const second = elems.find((elem) => elem.dataset.pos == 2);
  const last = elems.find((elem) => elem.dataset.pos == 3);

  current.classList.remove("carousel__item_active");

  [current, prev, next, first, second, last].forEach((item) => {
    var itemPos = item.dataset.pos;

    item.dataset.pos = getPos(itemPos, newActivePos);
  });
};

const getPos = function (current, active) {
  const diff = current - active;

  if (Math.abs(current - active) > 2) {
    return -current;
  }

  return diff;
};


const basicScrollTop = function () {  

   // The button
   const btnTop = document.querySelector('#goTop');
   // Reveal the button
   const btnReveal = function () { 

     if (window.scrollY >= 300) {
       btnTop.classList.add('is-visible');
       document.querySelector('html').style.scrollBehavior = 'auto';
      } else {
         btnTop.classList.remove('is-visible');
     }    
   }  
   
   var TopscrollTo = function () {
     if(window.scrollY!=0) {
       setTimeout(function() {
         window.scrollTo(0,window.scrollY-30);
         TopscrollTo();
       }, 5);
     }
   }
   // Listeners
   window.addEventListener('scroll', btnReveal);
   btnTop.addEventListener('click', TopscrollTo);  
     
 };
 basicScrollTop();

//  Check to see if serverworker exist, if yes. Register
//  if ('serviceWorker' in navigator) {
//   navigator.serviceWorker.register('/sw.js')
//      .then(reg => {})
//      .catch(err => {})
// }