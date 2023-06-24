    function checkPassword() {
      var password = document.getElementById("password").value;
      if (password === "123") {
        window.location.href = "https://www.google.com/";
      } else if (password === "1234") {
        window.location.href = "https://www.youtube.com/";
      } else {
        alert("Incorrect Password!");
      }
    }
