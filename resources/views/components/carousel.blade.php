<div x-data="carouselData()" class="m-4">
    <div class="relative">
        <!-- Carousel Wrapper -->
        <div class="relative overflow-hidden rounded-lg">
            <!-- Slide 1 -->
            <div class="slide" :class="{ 'hidden': currentSlide !== 0 }">
                <img src="angkorwat.jpg" alt="Slide 1" class="w-full lg:h-[65vh] object-cover rounded-lg" style="object-position: 50% 30%;">
                <div class="absolute inset-0 flex items-center justify-center text-center text-white bg-black bg-opacity-30 rounded-lg">
                    <p class="text-4xl lg:text-8xl font-bold font-title">Angkor Wat</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide" :class="{ 'hidden': currentSlide !== 1 }">
                <img src="phnompenh.jpg" alt="Slide 2" class="w-full lg:h-[65vh] object-cover rounded-lg" style="object-position: 50% 30%;">
                <div class="absolute inset-0 flex items-center justify-center text-center text-white bg-black bg-opacity-30 rounded-lg">
                    <p class="text-4xl lg:text-8xl font-bold font-title">Phnom Penh</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide" :class="{ 'hidden': currentSlide !== 2 }">
                <img src="kampot.jpg" alt="Slide 3" class="w-full lg:h-[65vh] object-cover rounded-lg" style="object-position: 50% 30%;">
                <div class="absolute inset-0 flex items-center justify-center text-center text-white bg-black bg-opacity-30 rounded-lg">
                    <p class="text-4xl lg:text-8xl font-bold font-title">Kampot</p>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <button @click="prevSlide" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-500 text-white px-4 py-2 rounded-full hover:bg-gray-700">‹</button>
            <button @click="nextSlide" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-500 text-white px-4 py-2 rounded-full hover:bg-gray-700">›</button>
        </div>
        <!-- Navigation Dots -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <template x-for="(slide, index) in slides" :key="index">
                <button
                    @click="goToSlide(index)"
                    :class="{
                        'bg-white': currentSlide === index,
                        'bg-gray-400': currentSlide !== index
                    }"
                    class="dot w-3 h-3 rounded-full transition-colors duration-300"
                ></button>
            </template>
        </div>
    </div>
</div>
<script>
    function carouselData() {
        return {
            currentSlide: 0,
            slides: ['angkorwat.jpg', 'phnompenh.jpg', 'kampot.jpg'],
            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            },
            prevSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
            },
            goToSlide(index) {
                this.currentSlide = index;
            }
        };
    }
</script>
