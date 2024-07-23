let signUpbtn = document.querySelector(".signUpbtn");
let signInbtn = document.querySelector(".signInbtn");
let NameField = document.querySelector(".NameField");
let title = document.querySelector(".title");
let underline = document.querySelector(".underline");
let text = document.querySelector(".text");

signInbtn.addEventListener('click',()=>{
    NameField.style.maxHeight = '0px';
    title.innerHTML = 'Sign In';
    text.innerHTML = 'Forgot password';
    signUpbtn.classList.add('disable');
    signInbtn.classList.remove('disable');
    underline.style.transform = 'translateX(35px)';
});
signUpbtn.addEventListener('click',()=>{
     NameField.style.maxHeight = '60px';
     title.innerHTML = 'Sign Up';
     text.innerHTML = 'Password Suggestion';
     signUpbtn.classList.remove('disable');
     signInbtn.classList.add('disable');
     underline.style.transform = 'translateX(0)';
 });
// Get reference to the Sign In button
const signInBtn = document.getElementById('signInBtn');

// Add event listener for click
signInBtn.addEventListener('click', function(event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Check if the sign-up details are filled
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  if (username && password) {
    // Redirect to the main HTML page
    window.location.href = './index.html';
  } else {
    // If sign-up details are not filled, display an alert
    alert('Please fill in all sign-up details.');
  }
});

