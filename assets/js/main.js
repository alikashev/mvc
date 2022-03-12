function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".content-container").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "http://localhost/mvc/index.php?action=readone&contact_id=6");
    xhttp.send();
  }

  function loadCreateForm() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".content-container").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "http://localhost/mvc/index.php?action=createform");
    xhttp.send();
  }