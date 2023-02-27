const eyeButton = document.querySelector(".show-icon");
const passwordInput = document.getElementById("passwordInput");

eyeButton.addEventListener("click", () => {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeButton.style.color = "#078c4e";
  } else {
    passwordInput.type = "password";
    eyeButton.style.color = "#d9d9d9";
  }
});
