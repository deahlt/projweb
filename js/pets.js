const slideLeft = document.querySelector(".slide-left")
const slideRight = document.querySelector(".slide-right")
const carouselItemWrapper = document.querySelector(".carousel-item-wrapper")
const carouselItems = document.querySelectorAll(".carousel-item")

slideLeft.addEventListener("click", e => {
  console.log(carouselItemWrapper.scrollLeft)
  carouselItemWrapper.scrollLeft -= carouselItems[0].width
})
slideRight.addEventListener("click", e => {
  console.log(carouselItemWrapper.scrollLeft)
  carouselItemWrapper.scrollLeft += carouselItems[0].width
})