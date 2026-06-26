// Header scroll effect
const header = document.querySelector("header");

function fixedNavbar() {
  if (header) {
    header.classList.toggle("scroll", window.pageYOffset > 0);
  }
}

fixedNavbar();
window.addEventListener("scroll", fixedNavbar);

// Menu toggle
const menu = document.querySelector("#menu-btn");
const userBtn = document.querySelector("#user-btn");

if (menu) {
  menu.addEventListener("click", function () {
    const nav = document.querySelector(".navbar");
    if (nav) {
      nav.classList.toggle("active");
    }
  });
}

if (userBtn) {
  userBtn.addEventListener("click", function () {
    const userBox = document.querySelector(".user-box");
    if (userBox) {
      userBox.classList.toggle("active");
    }
  });
}

/*-----------------home page slider----------------------*/
const leftArrow = document.querySelector(".home-section .left-arrow");
const rightArrow = document.querySelector(".home-section .right-arrow");
const slider = document.querySelector(".slider");
const dots = document.querySelectorAll(".home-section .slider-progress .dot");
const allSlides = document.querySelectorAll(".slider__slider");

// Only run slider code if elements exist (home page only)
if (slider && leftArrow && rightArrow && allSlides.length > 0) {
  let currentSlide = 0;
  const totalSlides = allSlides.length;

  function updateDots() {
    dots.forEach((dot, index) => {
      dot.classList.toggle("active", index === currentSlide);
    });
  }

  function goToSlide(slideIndex) {
    // Ensure slideIndex is within bounds
    if (slideIndex < 0) {
      slideIndex = totalSlides - 1;
    } else if (slideIndex >= totalSlides) {
      slideIndex = 0;
    }

    currentSlide = slideIndex;

    // Scroll to the exact position of the slide
    const slideWidth = slider.clientWidth;
    slider.scrollTo({
      left: slideWidth * currentSlide,
      behavior: "smooth",
    });

    updateDots();
  }

  function scrollRight() {
    goToSlide(currentSlide + 1);
  }

  function scrollLeft() {
    goToSlide(currentSlide - 1);
  }

  // Auto-play timer
  let timerId = setInterval(scrollRight, 5000);

  function resetTimer() {
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 5000);
  }

  // Arrow click events
  leftArrow.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    scrollLeft();
    resetTimer();
  });

  rightArrow.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    scrollRight();
    resetTimer();
  });

  // Dot navigation
  dots.forEach((dot, index) => {
    dot.addEventListener("click", (e) => {
      e.preventDefault();
      goToSlide(index);
      resetTimer();
    });
  });

  // Keyboard navigation
  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") {
      scrollLeft();
      resetTimer();
    } else if (e.key === "ArrowRight") {
      scrollRight();
      resetTimer();
    }
  });

  // Touch/swipe support
  let touchStartX = 0;
  let touchEndX = 0;

  slider.addEventListener(
    "touchstart",
    (e) => {
      touchStartX = e.changedTouches[0].screenX;
    },
    { passive: true },
  );

  slider.addEventListener(
    "touchend",
    (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    },
    { passive: true },
  );

  function handleSwipe() {
    const swipeDistance = touchStartX - touchEndX;
    if (Math.abs(swipeDistance) > 50) {
      if (swipeDistance > 0) {
        scrollRight();
      } else {
        scrollLeft();
      }
      resetTimer();
    }
  }

  // Pause on hover
  slider.addEventListener("mouseenter", () => {
    clearInterval(timerId);
  });

  slider.addEventListener("mouseleave", () => {
    resetTimer();
  });

  // Handle window resize
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      goToSlide(currentSlide);
    }, 250);
  });

  // Initialize
  updateDots();
}

/*---------------------testimonial-slider-------------------------*/
const testimonialSlides = document.querySelectorAll(".testimonial-item");

if (testimonialSlides.length > 0) {
  let testimonialIndex = 0;

  function nextTestimonialSlide() {
    testimonialSlides[testimonialIndex].classList.remove("active");
    testimonialIndex = (testimonialIndex + 1) % testimonialSlides.length;
    testimonialSlides[testimonialIndex].classList.add("active");
  }

  function prevTestimonialSlide() {
    testimonialSlides[testimonialIndex].classList.remove("active");
    testimonialIndex =
      (testimonialIndex - 1 + testimonialSlides.length) %
      testimonialSlides.length;
    testimonialSlides[testimonialIndex].classList.add("active");
  }

  // Add event listeners for testimonial arrows if they exist
  const testLeftArrow = document.querySelector(
    ".testimonial-container .left-arrow",
  );
  const testRightArrow = document.querySelector(
    ".testimonial-container .right-arrow",
  );

  if (testLeftArrow) {
    testLeftArrow.addEventListener("click", prevTestimonialSlide);
  }

  if (testRightArrow) {
    testRightArrow.addEventListener("click", nextTestimonialSlide);
  }
}
