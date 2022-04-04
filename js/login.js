let isLoggedIn = localStorage.getItem("username")
  ? localStorage.getItem("username")
  : false;

let role = localStorage.getItem("admin")
  ? localStorage.getItem("admin")
  : false;

let pass = document.querySelector("#inputPassword");

let nullInput = document.querySelector(".null-input");

if (isLoggedIn) {
  if (role) {
    window.location.pathname.includes("login.php")
      ? window.location.replace("Pages/attendance.php")
      : "";
  } else {
    window.location.pathname.includes("login.php")
      ? window.location.replace("Pages/attendance2.php")
      : "";
  }
}

function loginn() {
  if (
    document.querySelector("#inputUser").value == "" &&
    document.querySelector("#inputPassword").value == ""
  ) {
    nullInput.innerHTML = "please fill the inputs";
  } else if (
    document.querySelector("#inputUser").value != "" &&
    pass.value.startsWith("vi")
  ) {
    let admin = "admin";
    localStorage.setItem("admin", admin);

    let username = document.querySelector("#inputUser");
    localStorage.setItem("username", username);
    location.reload();
  } else if (
    document.querySelector("#inputUser").value != "" &&
    pass.value != ""
  ) {
    let username = document.querySelector("#inputUser");
    localStorage.setItem("username", username);
    location.reload();
  }
}
