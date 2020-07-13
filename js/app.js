const form = document.querySelector('#subscribe-form');



form.addEventListener('submit', (event) => {
   event.preventDefault();

     
      const emailValue = form.email.value;
      const localItem = localStorage.getItem('email');
      if (localItem === null) {
         localStorage.setItem('email', emailValue);
         const getValueFromLS = localStorage.getItem('email');
    
         console.log('Saved successfully');
      } else {
         const getValueFromLS = localStorage.getItem('email');
         if (getValueFromLS === emailValue) {
            console.log('Duplicate value');
            // TODO: Validate here
         } else {
            console.log('Saved successfully')
            localStorage.setItem('email', emailValue);
            const getValueFromLS = localStorage.getItem('email');
   
         }
      }
})