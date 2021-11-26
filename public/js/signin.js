const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const signupForm = document.getElementById("signUpForm");
const signinForm = document.getElementById("signInForm");
const container = document.querySelector(".container");

signInBtn.addEventListener("click", () => {
	container.classList.remove("right-panel-active");
});

signUpBtn.addEventListener("click", () => {
	container.classList.add("right-panel-active");
});

// signupForm.addEventListener("submit", (e) => e.preventDefault());
// signinForm.addEventListener("submit", (e) => e.preventDefault());
