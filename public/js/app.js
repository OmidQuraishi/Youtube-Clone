let closeSearch = document.querySelector(".close-search");
let mobileSearch = document.querySelector(".mobile-search");
let searchBtn = document.querySelector(".search-btn");

closeSearch.addEventListener("click", function () {
  mobileSearch.classList.add("hidden");
  mobileSearch.classList.remove("flex");
});

searchBtn.addEventListener("click", function () {
  mobileSearch.classList.remove("hidden");
  mobileSearch.classList.add("flex");
});
