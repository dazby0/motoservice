const eyeButton = document.querySelector(".show-icon");
const passwordInput = document.getElementById("passwordInput");

eyeButton.addEventListener("click", () => {
  passwordInput.type === "password"
    ? (passwordInput.type = "text")
    : (passwordInput.type = "password");
});
