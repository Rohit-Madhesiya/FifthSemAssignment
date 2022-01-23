window.onload = function () {
  inpImg = document.getElementById('imgInpt');
  itemImg = document.getElementById('showImg');
  spanId = document.getElementById('hint');
  inpImg.addEventListener("change", showImg);
}

function showImg() {
  const file = this.files[0];

  if (file) {
    reader = new FileReader();
    spanId.style.display = "none";
    reader.addEventListener("load", function () {
      itemImg.setAttribute("src", this.result);
    });
    reader.readAsDataURL(file);
  }
}
