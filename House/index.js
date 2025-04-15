console.log("JS is working");
var dialog = document.querySelector('dialog');
document.getElementById('showNumber').onclick = function() {
  dialog.showModal();
};
document.getElementById('close').onclick = function() {
  dialog.close();
};
console.log("All is working");
function isAvailable() {
  let form = document.getElementById("f-main");
  let elements = form.elements;
  let name = elements.namedItem("name").value;
  let email = elements.namedItem("email").value;
  let s = elements.namedItem("s").value;

  console.log(name, email, s);
  if (name.length > 3 && email.length > 3) {
      elements.namedItem("submit").disabled = false;
  } else {
      elements.namedItem("submit").disabled = true;
  }
}