function openForm() {
    document.getElementById("contactForm").style.display = "block";
}

function closeForm() {
    document.getElementById("contactForm").style.display = "none";
}

function validateForm() {
    var name = document.contact.name.value;
    var message = document.contact.text.value;

    if (name.length < 4) {
        alert("Please input a valid Name");
        return false;
    } else if (message.length < 20) {
        alert("Please, Length of message must be at least 20 characters long.");
        return false;
    }

    var x = document.forms["input"]["email"].value;
    var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  
    if (x !== null && x !== "" && x.match(email)) {
      return true;
    } else {
      alert("Input email address, please!");
      return false;
    }
}
