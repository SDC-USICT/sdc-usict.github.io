/*footer*/
const form = document.querySelector("#form");

const mains = document.querySelector(".mains");

const close = document.querySelector(".end");

form.addEventListener("click", function () {
  mains.classList.add("active");
});
close.addEventListener("click", function () {
  mains.classList.remove("active");
});


// carousel -- 2 start
const carouselSecondItems = document.querySelectorAll(".carousel--2");
carouselSecondItems.forEach((item) => {
  item.addEventListener("click", () => {
    window.location.href = "#";
  });
});

// carousel -- 2 end
