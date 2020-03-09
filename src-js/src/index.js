var idleTime = 0;
$(document).ready(function() {
  console.log("test");
  //Increment the idle time counter every minute.
  var idleInterval = setInterval(timerIncrement, 6000); // 1 minute

  //Zero the idle timer on mouse movement.
  $(this).mousemove(function(e) {
    idleTime = 0;
  });
  $(this).keypress(function(e) {
    idleTime = 0;
  });
});

var modal = document.getElementById("modal");
console.log(modal);

function timerIncrement() {
  idleTime = idleTime + 1;
  if (idleTime > 1) {
    // 20 minutes
    openModal(modal);
    idleTime = 0;

    //window.location.reload();
  }
}
const overlay = document.getElementById("overlay");

function openModal(modal) {
  if (modal == null) return;
  modal.classList.add("active");
  overlay.classList.add("active");
}
window.closeModal = function(modal) {
  console.log("testmod");
  if (modal == null) return;
  modal.classList.remove("active");
  overlay.classList.remove("active");
};

$("#sign-up").click(function() {
  var modal = document.getElementById("modal");
  var firstName = document.getElementById("first_name").value;
  var lastName = document.getElementById("last_name").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;

  var contact = { firstName, lastName, phone, email };
  console.log("sign-up button clicked");

  $.post(
    "https://hooks.zapier.com/hooks/catch/3424817/odkx2ft/",
    contact,
    function(data, status) {
      alert("Data: " + data + "\nStatus: " + status);
      closeModal(modal);
    }
  );
});

window.send = function(e) {
  console.log("contact runs");
  e.preventDefault();

  var firstName = document.getElementById("first_name").value;
  var lastName = document.getElementById("last_name").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;

  var contact = { firstName, lastName, phone, email };
};
/*
  axios
    .post("https://api.contentcucumber.com/services/marketing/add-contact", {
      contact
    })
    .then(res => {
      console.log(res);
    })
    .catch(err => {
      console.log(err);
    });
};
*/
