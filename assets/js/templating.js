//     load template files
HTMLElement.prototype.removeChildren = function (cssSelector) {
  // Loop through the array of indices
  let indices = this.querySelectorAll(cssSelector);
  for (let i = 0; i < indices.length; i++) {
    // Remove the child element at that index
    this.removeChild(indices[i]);
  }
};

function loadHTML(names) {
  names.forEach((name, i) => {
    let temp = document.createElement("div");
    fetch(`${name}.html`)
      .then(response => response.text())
      .then(text => {
        temp.innerHTML = text;

        i == 0
          ? document.body.prepend(temp.querySelectorAll("nav")[0])
          : document.body.append(temp.querySelectorAll("footer")[0]);
      });
  });
}

// document.addEventListener("DOMContentLoaded", function () {
loadHTML(["header", "footer"]);
// });
