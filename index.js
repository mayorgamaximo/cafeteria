const showDivsButton = document.getElementById("showDivsButton");
const divContainer = document.getElementById("divContainer");
const closeButton = document.getElementById("closeButton");


showDivsButton.addEventListener("click", function () {
  divContainer.style.display = "flex";
  showDivsButton.style.display = "none";
});


closeButton.addEventListener("click", function () {
  divContainer.style.display = "none";
  showDivsButton.style.display = "block";
});