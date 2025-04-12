import thumbSwiper from './thumbSwiper.js';
import initializeProductGallery from './productGallery.js';
import initializeReadMoreFunctionality from './readMore.js';
import initializeSuggestionSwiper from './suggestionSwiper.js';
import initializeImageLightbox from './lightBox.js';




document.addEventListener('DOMContentLoaded', () => {
    thumbSwiper();
    initializeProductGallery();
    initializeReadMoreFunctionality();
    initializeSuggestionSwiper();
    initializeImageLightbox();
});
