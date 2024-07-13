document.addEventListener('DOMContentLoaded', function () {
    const signInForm = document.getElementById('signInForm');
    if (signInForm) {
        signInForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting

            // Get input values
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Define regular expressions for validation
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            const strongPasswordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;

            // Validate email and password
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');
            const successAlert = document.getElementById('successAlert');
            const rememberMeCheckbox = document.getElementById('remember-me');
            const rememberError = document.getElementById('remember-error');

            emailError.classList.add('hidden');
            passwordError.classList.add('hidden');
            successAlert.classList.add('hidden');
            rememberError.classList.add('hidden');

            let isValid = true;

            if (!emailRegex.test(email)) {
                emailError.classList.remove('hidden');
                emailError.textContent = "Veuillez entrer un email valide.";
                isValid = false;
            }

            console.log(password); // Log the password for debugging

            if (!strongPasswordRegex.test(password)) {
                passwordError.classList.remove('hidden');
                passwordError.textContent = "Le mot de passe doit comporter au moins 8 caractères et contenir à la fois des lettres et des chiffres.";
                isValid = false;
            }

            if (!rememberMeCheckbox.checked) {
                rememberError.classList.remove('hidden');
                rememberError.textContent = "Veuillez cocher la case « Se souvenir de moi » avant de soumettre le formulaire.";
                isValid = false;
            }

            if (isValid) {
                // Form is valid, show the success message
                successAlert.classList.remove('hidden');
                successAlert.textContent = "Vous êtes connecté avec succès.";
                // You can submit the form here if needed
                signInForm.submit();
            }
        });
    }
});
