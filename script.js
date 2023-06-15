// Obtener todos los elementos con la clase "carousel-slide"
const slides = document.querySelectorAll('.carousel-slide');

// Obtener el número total de slides
const totalSlides = slides.length;

// Establecer el índice actual del slide
let currentSlide = 0;

// Función para mostrar el slide actual
function showSlide() {
  // Ocultar todos los slides
  slides.forEach((slide) => {
    slide.style.display = 'none';
  });

  // Mostrar el slide actual
  slides[currentSlide].style.display = 'block';
}

// Función para pasar al siguiente slide
function nextSlide() {
  // Incrementar el índice del slide actual
  currentSlide++;

  // Si se llega al final, volver al primer slide
  if (currentSlide >= totalSlides) {
    currentSlide = 0;
  }

  // Mostrar el slide actual
  showSlide();
}

// Mostrar el primer slide al cargar la página
showSlide();

// Configurar el intervalo para cambiar automáticamente de slide
setInterval(nextSlide, 3000); // Cambiar cada 3 segundos (ajusta el tiempo según tus necesidades)
