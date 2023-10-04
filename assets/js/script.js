document.addEventListener("DOMContentLoaded", function () {
  const successMessage = document.getElementById("sentMailSuc");
  successMessage
    ? successMessage.scrollIntoView()
    : console.log("def");
});
document.addEventListener("DOMContentLoaded", function () {
  let otherLang = document.querySelector("#other-lang"); //.href;
  console.log("other-lang", otherLang);
  // otherLang = otherLang + location.href;
});
