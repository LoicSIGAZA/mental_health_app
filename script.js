const signupForm = document.getElementById('signupForm');
const signinForm = document.getElementById('signinForm');
const toggleLink = document.getElementById('toggleForm');
const toggleLinkBack = document.getElementById('toggleFormBack');


toggleLink.addEventListener('click', function (e) {
    e.preventDefault(); 
    signupForm.classList.add('hidden'); 
    signinForm.classList.remove('hidden'); 
    document.getElementById('form-title').textContent = 'Sign In';
});

toggleLinkBack.addEventListener('click', function (e) {
    e.preventDefault(); 
    signinForm.classList.add('hidden'); 
    signupForm.classList.remove('hidden'); 
    document.getElementById('form-title').textContent = 'Sign Up';
});
