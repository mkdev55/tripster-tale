<div class="relative w-1/2 mx-auto">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden rounded-lg shadow-lg">
      <!-- Carousel items -->
      <div class="flex transition-transform duration-300 ease-in-out" style="transform: translateX(0%);" id="carousel-items">
        <!-- Item 1 -->
        <div class="relative min-w-full">
          <img src="angkorwat.jpg" alt="Slide 1" class="w-full">
          <div class="absolute inset-0 flex items-center justify-center text-center text-white bg-black bg-opacity-30">
            <p class="text-xl font-bold">Angkor Wat</p>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="relative min-w-full">
          <img src="phnompenh.jpg" alt="Slide 2" class="w-full">
          <div class="absolute inset-0 flex items-center justify-center text-center text-white bg-black bg-opacity-30">
            <p class="text-xl font-bold">Phnom Penh</p>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="relative min-w-full">
          <img src="KAMPOT.jpg" alt="Slide 3" class="w-full">
          <div class="absolute inset-0 flex items-center justify-center text-center text-white bg-black bg-opacity-30">
            <p class="text-xl font-bold">Kampot</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation buttons -->
    <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-full hover:bg-gray-700">‹</button>
    <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-full hover:bg-gray-700">›</button>
  </div>
  <script>
document.addEventListener('DOMContentLoaded', function () {
    const carouselItems = document.getElementById('carousel-items');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    let index = 0;

    function updateCarousel() {
      carouselItems.style.transform = `translateX(-${index * 100}%)`;
    }

    prevButton.addEventListener('click', function () {
      index = (index > 0) ? index - 1 : 0;
      updateCarousel();
    });

    nextButton.addEventListener('click', function () {
      index = (index < carouselItems.children.length - 1) ? index + 1 : carouselItems.children.length - 1;
      updateCarousel();
    });

    const totalSlides = carouselItems.children.length;
    let currentIndex = 0;

    function showSlide(index) {
      // Calculate the new translateX value
      const offset = -index * 100;
      carouselItems.style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      showSlide(currentIndex);
    }

    // Automatically update slide every 5 seconds
    setInterval(nextSlide, 5000);
  });
  </script>

