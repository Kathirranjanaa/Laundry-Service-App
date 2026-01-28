//login pop up Starts
// JavaScript function to show the login popup
function showLoginPopup() {
  document.getElementById('loginPopup').style.display = 'block';
}

// JavaScript function to hide the login popup
function hideLoginPopup() {
  document.getElementById('loginPopup').style.display = 'none';
}

//Login pop up Ends





// Register pop up Starts

function showRegisterPopup() {
  document.getElementById('registerPopup').style.display = 'block';
}

// JavaScript function to hide the registration popup
function hideRegisterPopup() {
  document.getElementById('registerPopup').style.display = 'none';
}

// JavaScript code to connect the "Register" button to the registration pop-up
document.getElementById('registerButton').addEventListener('click', function () {
  showRegisterPopup(); // Call the showRegisterPopup() function when the button is clicked
});

// Register pop up Ends






// login-Register connection in popup Starts
function showLoginPopup() {
  document.getElementById('loginPopup').style.display = 'block';
}

// JavaScript function to hide the login popup
function hideLoginPopup() {
  document.getElementById('loginPopup').style.display = 'none';
}

// JavaScript function to show the registration popup
function showRegisterPopup() {
  document.getElementById('registerPopup').style.display = 'block';
}

// JavaScript function to hide the registration popup
function hideRegisterPopup() {
  document.getElementById('registerPopup').style.display = 'none';
}

// JavaScript code to connect the "Register" button to the registration pop-up
document.getElementById('registerButton').addEventListener('click', function () {
  showRegisterPopup(); // Call the showRegisterPopup() function when the button is clicked
});

// JavaScript code to connect the "Sign Up" link in the login popup to the registration pop-up
document.getElementById('signupLinkInLogin').addEventListener('click', function () {
  hideLoginPopup(); // Hide the login popup
  showRegisterPopup(); // Show the registration popup
});

// JavaScript code to connect the "Login" link in the registration popup to the login pop-up
document.getElementById('loginLinkInSignup').addEventListener('click', function () {
  hideRegisterPopup(); // Hide the registration popup
  showLoginPopup(); // Show the login popup
});

// login-Register connection in popup Ends






// Function to show the login popup
function showLoginPopup() {
  document.getElementById('loginPopup').style.display = 'block';
  document.getElementById('registerPopup').style.display = 'none'; // Hide register popup if open
}

// Function to show the registration popup
function showRegisterPopup() {
  document.getElementById('registerPopup').style.display = 'block';
  document.getElementById('loginPopup').style.display = 'none'; // Hide login popup if open
}

// Function to hide the login popup
function hideLoginPopup() {
  document.getElementById('loginPopup').style.display = 'none';
}

// Function to hide the registration popup
function hideRegisterPopup() {
  document.getElementById('registerPopup').style.display = 'none';
}

// Function to handle form submission in the login popup
function loginFormSubmit() {
  // Add form submission logic here
  // For demonstration, let's just hide the popup
  hideLoginPopup();
  return false; // Prevent default form submission behavior
}

// Function to handle form submission in the register popup
function registerFormSubmit() {
  // Add form submission logic here
  // For demonstration, let's just hide the popup
  hideRegisterPopup();
  return false; // Prevent default form submission behavior
}





//eye icon for register popup starts
function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var eyeIcon = document.getElementById("eyeIcon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeIcon.classList.remove("fa-eye");
    eyeIcon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    eyeIcon.classList.remove("fa-eye-slash");
    eyeIcon.classList.add("fa-eye");
  }
}
//eye icon for register popup ends







//slide show for shop starts

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("shop");
  if (slideIndex >= slides.length - 2) {
    slideIndex = 0;
  } else if (slideIndex < 0) {
    slideIndex = slides.length - 3;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  // Show only three shops at a time
  for (i = slideIndex; i < slideIndex + 3; i++) {
    slides[i].style.display = "block";
  }
}

function plusSlides(n) {
  slideIndex += n;
  showSlides();
}


//slide shoe for shops end







//shops popup starts
function showPopup(shop) {
  var popup = document.getElementById(shop + "-popup");
  popup.style.display = "block";
}

function closePopup(shop) {
  var popup = document.getElementById(shop + "-popup");
  popup.style.display = "none";
}

function showPopup(shop) {
  var popup = document.getElementById(shop + "-popup");
  popup.style.display = "block";
}

function closePopup(shop) {
  var popup = document.getElementById(shop + "-popup");
  popup.style.display = "none";
}
//shops popup Ends








// drops popup starts
// JavaScript code to show the "drops-popup" when hovering over the "drops" box
document.getElementById('dropsBox').addEventListener('mouseover', function () {
  showPopup('drops');
});

// JavaScript code to hide the "drops-popup" when moving the cursor away from the "drops" box
document.getElementById('dropsBox').addEventListener('mouseout', function () {
  closePopup('drops');
});
// drops popup ends



// tumbledry popup starts
// JavaScript code to show the "tumbledry-popup" when hovering over the "tumbledry" box
document.getElementById('tumbledry-box').addEventListener('mouseover', function () {
  showPopup('tumbledry');
});

// JavaScript code to hide the "tumbledry-popup" when moving the cursor away from the "tumbledry" box
document.getElementById('tumbledry-box').addEventListener('mouseout', function () {
  closePopup('tumbledry');
});
// tumbledry popup ends



// fabric popup starts
// JavaScript code to show the "fabrico-popup" when hovering over the "fabrico" box
document.getElementById('fabrico-box').addEventListener('mouseover', function () {
  showPopup('fabrico');
});

// JavaScript code to hide the "fabrico-popup" when moving the cursor away from the "fabrico" box
document.getElementById('fabrico-box').addEventListener('mouseout', function () {
  closePopup('fabrico');
});

// fabric popup ends





// JavaScript to handle the shaking animation
document.querySelectorAll('.card').forEach(card => {
  card.addEventListener('mouseover', () => {
    card.querySelector('.shake-icon').classList.add('shake');
    setTimeout(() => {
      card.querySelector('.shake-icon').classList.remove('shake');
    }, 5000); // Remove the 'shake' class after 5 seconds
  });
});









let slideIndexServices = 0;
const totalServices = 6; // Total number of services
// Function to initially display the first set of services
function initializeServices() {
  const cards = document.querySelectorAll('#service .card');
  // Hide all services
  for (let i = 0; i < totalServices; i++) {
    cards[i].style.display = 'none';
  }
  // Show the first set of services
  for (let i = 0; i < 3; i++) {
    cards[i].style.display = 'block';
  }
}
// Function to move to the next set of services
function nextSlideServices() {
  const cards = document.querySelectorAll('#service .card');
  // Hide all services
  for (let i = 0; i < totalServices; i++) {
    cards[i].style.display = 'none';
  }
  // Update slide index
  slideIndexServices = (slideIndexServices + 1) % totalServices;
  // Show the next set of services
  for (let i = 0; i < 3; i++) {
    cards[(slideIndexServices + i) % totalServices].style.display = 'block';
  }
}
// Function to move to the previous set of services
function prevSlideServices() {
  const cards = document.querySelectorAll('#service .card');
  // Hide all services
  for (let i = 0; i < totalServices; i++) {
    cards[i].style.display = 'none';
  }
  // Update slide index
  slideIndexServices = (slideIndexServices - 1 + totalServices) % totalServices;
  // Show the previous set of services
  for (let i = 0; i < 3; i++) {
    cards[(slideIndexServices + i) % totalServices].style.display = 'block';
  }
}
// Initialize services when the page loads
window.onload = initializeServices;







window.addEventListener('resize', function () {
  if (window.innerWidth < 768) {
    // Adjust JavaScript-driven styles or behaviors for smaller screens
  } else {
    // Adjust JavaScript-driven styles or behaviors for larger screens
  }
});
