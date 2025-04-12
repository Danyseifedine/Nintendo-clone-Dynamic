export default function initializeImageLightbox(){const style=document.createElement('style');style.textContent=`
    .nintendo-lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.50);
        z-index: 9999;
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .nintendo-lightbox.active {
        opacity: 1;
    }

    .nintendo-lightbox-content {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        backdrop-filter: blur(10px);
        justify-content: center;
    }

    .nintendo-lightbox-main {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .nintendo-lightbox-image {
        max-height: calc(100vh - 50px);
        max-width: 100%;
        object-fit: contain;
        border-radius: 20px;
        transition: opacity 0.3s ease;
    }

    .nintendo-lightbox-image.fade-out {
        opacity: 0;
    }

    .nintendo-lightbox-image.fade-in {
        opacity: 1;
    }

    .nintendo-lightbox-close {
        position: fixed;
        top: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background: rgba(0, 0, 0, 0.3);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nintendo-lightbox-close svg {
        width: 24px;
        height: 24px;
        color: white;
    }

    .nintendo-lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: white;
        background: rgba(0, 0, 0, 0.3);
        z-index: 10000;
    }

    .nintendo-lightbox-prev {
        left: 20px;
    }

    .nintendo-lightbox-next {
        right: 20px;
    }

    .nintendo-lightbox-thumbnails {
        height: 120px;
        margin-top: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .nintendo-lightbox-thumbs-container {
        display: flex;
        gap: 10px;
        overflow-x: auto;
        width: 80%;
        max-width: 1000px;
        padding: 10px;
        scrollbar-width: thin;
        scrollbar-color: #e60012 rgba(0,0,0,0.2);
        -webkit-overflow-scrolling: touch;
        white-space: nowrap;
    }

    .nintendo-lightbox-thumbs-container::-webkit-scrollbar {
        height: 8px;
    }

    .nintendo-lightbox-thumbs-container::-webkit-scrollbar-track {
        background: rgba(0,0,0,0.2);
        border-radius: 4px;
    }

    .nintendo-lightbox-thumbs-container::-webkit-scrollbar-thumb {
        background-color: #e60012;
        border-radius: 4px;
    }

    .nintendo-lightbox-thumb {
        border-radius: 20px;
        width: 166px;
        height: 93px;
        border: 2px solid transparent;
        overflow: hidden;
        cursor: pointer;
        flex-shrink: 0;
        display: inline-block;
    }

    .nintendo-lightbox-thumb.active {
        border-color: #e60012;
    }

    .nintendo-lightbox-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
`;document.head.appendChild(style);const lightbox=document.createElement('div');lightbox.className='nintendo-lightbox';const lightboxContent=document.createElement('div');lightboxContent.className='nintendo-lightbox-content';const mainArea=document.createElement('div');mainArea.className='nintendo-lightbox-main';const mainImage=document.createElement('img');mainImage.className='nintendo-lightbox-image';mainImage.alt='Product image';mainArea.appendChild(mainImage);const closeButton=document.createElement('button');closeButton.className='nintendo-lightbox-close';closeButton.innerHTML=`
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
`;mainArea.appendChild(closeButton);const prevButton=document.createElement('button');prevButton.className='nintendo-lightbox-nav nintendo-lightbox-prev';prevButton.innerHTML=`
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="15 18 9 12 15 6"></polyline>
    </svg>
`;mainArea.appendChild(prevButton);const nextButton=document.createElement('button');nextButton.className='nintendo-lightbox-nav nintendo-lightbox-next';nextButton.innerHTML=`
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="9 18 15 12 9 6"></polyline>
    </svg>
`;mainArea.appendChild(nextButton);const thumbnailsArea=document.createElement('div');thumbnailsArea.className='nintendo-lightbox-thumbnails';const thumbsContainer=document.createElement('div');thumbsContainer.className='nintendo-lightbox-thumbs-container';thumbnailsArea.appendChild(thumbsContainer);lightboxContent.appendChild(mainArea);lightboxContent.appendChild(thumbnailsArea);lightbox.appendChild(lightboxContent);document.body.appendChild(lightbox);const pageMainImage=document.getElementById('mainImage');const thumbnailGrid=document.querySelector('.thumbnail-grid');if(!thumbnailGrid){console.error('Thumbnail grid not found');return}
const thumbnails=thumbnailGrid.querySelectorAll('div[data-image-path]');let currentIndex=0;function openLightbox(index){if(thumbnails.length===0)return;currentIndex=index;const imagePath=thumbnails[currentIndex].getAttribute('data-image-path');if(!imagePath)return;mainImage.src=imagePath;mainImage.classList.add('fade-in');updateThumbnails();lightbox.style.display='block';void lightbox.offsetWidth;lightbox.classList.add('active');document.body.style.overflow='hidden'}
function closeLightbox(){lightbox.classList.remove('active');setTimeout(()=>{lightbox.style.display='none';document.body.style.overflow=''},300)}
function prevImage(){if(thumbnails.length===0)return;mainImage.classList.add('fade-out');mainImage.classList.remove('fade-in');setTimeout(()=>{currentIndex=(currentIndex-1+thumbnails.length)%thumbnails.length;const imagePath=thumbnails[currentIndex].getAttribute('data-image-path');if(!imagePath)return;mainImage.src=imagePath;updateThumbnails();void mainImage.offsetWidth;mainImage.classList.remove('fade-out');mainImage.classList.add('fade-in')},300)}
function nextImage(){if(thumbnails.length===0)return;mainImage.classList.add('fade-out');mainImage.classList.remove('fade-in');setTimeout(()=>{currentIndex=(currentIndex+1)%thumbnails.length;const imagePath=thumbnails[currentIndex].getAttribute('data-image-path');if(!imagePath)return;mainImage.src=imagePath;updateThumbnails();void mainImage.offsetWidth;mainImage.classList.remove('fade-out');mainImage.classList.add('fade-in')},300)}
function updateThumbnails(){thumbsContainer.innerHTML='';Array.from(thumbnails).forEach((thumb,index)=>{const thumbImg=thumb.querySelector('img');if(!thumbImg)return;const thumbElement=document.createElement('div');thumbElement.className='nintendo-lightbox-thumb';if(index===currentIndex){thumbElement.classList.add('active')}
const img=document.createElement('img');img.src=thumbImg.src;img.alt=`Thumbnail ${index + 1}`;thumbElement.appendChild(img);thumbElement.addEventListener('click',()=>{if(index===currentIndex)return;mainImage.classList.add('fade-out');mainImage.classList.remove('fade-in');setTimeout(()=>{currentIndex=index;const imagePath=thumbnails[currentIndex].getAttribute('data-image-path');if(imagePath){mainImage.src=imagePath;updateThumbnails();void mainImage.offsetWidth;mainImage.classList.remove('fade-out');mainImage.classList.add('fade-in')}},300)});thumbsContainer.appendChild(thumbElement)});const activeThumb=thumbsContainer.querySelector('.nintendo-lightbox-thumb.active');if(activeThumb){activeThumb.scrollIntoView({behavior:'smooth',block:'nearest',inline:'center'})}}
if(pageMainImage){pageMainImage.style.cursor='pointer';pageMainImage.addEventListener('click',()=>{const activeIndex=Array.from(thumbnails).findIndex(thumb=>thumb.classList.contains('active-thumbnail'));openLightbox(activeIndex>=0?activeIndex:0)})}
thumbnails.forEach((thumb,index)=>{thumb.style.cursor='pointer';thumb.addEventListener('click',function(){const imagePath=this.getAttribute('data-image-path');if(pageMainImage&&imagePath){pageMainImage.src=imagePath;thumbnails.forEach(t=>t.classList.remove('active-thumbnail','border-red-600','border-2'));this.classList.add('active-thumbnail','border-red-600','border-2')}})});if(thumbnails.length>0){const hasActive=Array.from(thumbnails).some(thumb=>thumb.classList.contains('active-thumbnail'));if(!hasActive&&thumbnails[0]){thumbnails[0].classList.add('active-thumbnail','border-red-600','border-2')}}
closeButton.addEventListener('click',closeLightbox);prevButton.addEventListener('click',prevImage);nextButton.addEventListener('click',nextImage);document.addEventListener('keydown',function(e){if(e.key==='Escape'&&lightbox.style.display!=='none'){closeLightbox()}else if(e.key==='ArrowLeft'&&lightbox.style.display!=='none'){prevImage()}else if(e.key==='ArrowRight'&&lightbox.style.display!=='none'){nextImage()}})}