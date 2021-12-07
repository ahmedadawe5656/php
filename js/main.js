let navbar = document.querySelector(".header .navbar");
let menubtn = document.querySelector("#menu-btn");
let formfly = document.forms[0];
let emailsub = document.forms[1];
let input4 = document.querySelector("[name = 'email']");

console.log(emailsub);

menubtn.onclick = () => {
  navbar.classList.toggle("active");
};

document
  .querySelectorAll(".about .video-container .controls .control-btn")
  .forEach((btn) => {
    btn.onclick = () => {
      let src = btn.getAttribute("data-src");
      document.querySelector(".about .video-container .video").src = src;
    };
  });

document.querySelectorAll(".about .d .controls .control-btn").forEach((btn) => {
  btn.onclick = () => {
    let src = btn.getAttribute("data-src");
    document.querySelector(".about .d .img").src = src;
  };
});

document.querySelectorAll(".about .c .controls .control-btn").forEach((btn) => {
  btn.onclick = () => {
    let src = btn.getAttribute("data-src");
    document.querySelector(".about .c .img").src = src;
  };
});

formfly.onsubmit = function (e) {
  window.alert("You will be contacted to confirm your reservation");
  e.preventDefault();
};

emailsub.onsubmit = function (e) {
  let email = input4.value;
  window.alert("You will be contacted to your email : " + email);
  e.preventDefault();
};
