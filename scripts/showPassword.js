const eyeButtonSt = document.querySelector(".show-icon");
const eyeButtonNd = document.querySelector(".show-icon-nd");
const passwordInput = document.getElementById("passwordInput");
const repeatedPassword = document.getElementById("repeatedInput");

eyeButtonSt.addEventListener("click", () => {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeButtonSt.style.color = "#078c4e";
  } else {
    passwordInput.type = "password";
    eyeButtonSt.style.color = "#d9d9d9";
  }
});

eyeButtonNd.addEventListener("click", () => {
  if (repeatedPassword.type === "password") {
    repeatedPassword.type = "text";
    eyeButtonNd.style.color = "#078c4e";
  } else {
    repeatedPassword.type = "password";
    eyeButtonNd.style.color = "#d9d9d9";
  }
});
