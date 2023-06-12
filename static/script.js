(() => {

    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Get references to the password and confirm password fields
    const passwordField = document.getElementById('Password');
    const confirmPasswordField = document.getElementById('ConfirmPass');

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        
        form.classList.add('was-validated')
        
      }, false)  
    })

    // Function to check if the passwords match
    function validatePassword() {
      if (passwordField.value !== confirmPasswordField.value) {
        confirmPasswordField.setCustomValidity("Passwords don't match");
      } else {
        confirmPasswordField.setCustomValidity('');
      }
    }

    // Add an event listener to the confirm password field
    confirmPasswordField.addEventListener('input', validatePassword);
 
})()