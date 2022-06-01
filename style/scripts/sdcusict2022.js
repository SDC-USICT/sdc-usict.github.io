// carousel -- 2 start
const carouselSecondItems = document.querySelectorAll(".carousel--2");
carouselSecondItems.forEach((item) => {
  item.addEventListener("click", () => {
    window.location.href = "#";
  });
});

// carousel -- 2 end
/*contact us */
const form = document.querySelector("#form");

const mains = document.querySelector(".mains");

const close1 = document.querySelector(".end");

form.addEventListener("click", function () {
  mains.classList.add("show");
});
close1.addEventListener("click", function () {
  mains.classList.remove("show");
});
