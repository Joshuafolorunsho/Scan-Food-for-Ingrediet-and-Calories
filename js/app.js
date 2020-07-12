const form = document.querySelector('#subscribe-form');


// const isEmailDuplicate = () => {
//    let isEmail = true;
//    // Get all emails from database
//    db.collection('users email').get().then((snapshot) => {
//       snapshot.docs.forEach(doc => {  
//          if (doc.data().email !== form.email.value) {
//             console.log('ran')
//            isEmail = false;
//          } 
//       });
//    })
//    return isEmail;
// }


form.addEventListener('submit', (event) => {
   event.preventDefault();
   // isEmailDuplicate();
   // console.log(isEmailDuplicate())
   // if (isEmailDuplicate()) {
     
      const emailValue = form.email.value;
      const localItem = localStorage.getItem('email');
      if (localItem === null) {
         localStorage.setItem('email', emailValue);
         const getValueFromLS = localStorage.getItem('email');
         // db.collection('users email').add({
         //    'email': getValueFromLS
         // });
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
            // db.collection('users email').add({
            //    'email': getValueFromLS
            // });
         }
      }

   // }
})