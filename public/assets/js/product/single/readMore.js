export default function initializeReadMoreFunctionality() {
    // Read More functionality
    const readMoreBtn = document.getElementById('read-more-btn');
    const hiddenDescription = document.getElementById('hidden-description');
    const fullDescription = document.getElementById('full-description');

    const openSvg = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" role="presentation" alt="" data-testid="MinusIcon" color="currentColor" size="24"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M0 12h32v8H0z"></path></svg>
`

    const closeSvg = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" role="presentation" alt="" data-testid="PlusIcon" color="currentColor" size="24"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M32.04 12h-12V0h-8v12h-12v8h12v12h8V20h12v-8z"></path></svg>
`

    if (!hiddenDescription || !fullDescription) {
        return;
    }

    const fullText = hiddenDescription.innerHTML;
    let truncatedText = '';
    if (fullText.length > 600) {
        truncatedText = fullText.substring(0, 600) + '...';
    } else {
        truncatedText = fullText;
    }
    fullDescription.innerHTML = truncatedText;
    let isExpanded = false;

    if (readMoreBtn) {
        readMoreBtn.addEventListener('click', () => {
            isExpanded = !isExpanded;

            if (isExpanded) {
                fullDescription.innerHTML = fullText;
                readMoreBtn.querySelector('span').textContent = 'Read less';
                readMoreBtn.querySelector('svg').innerHTML = openSvg;
            } else {
                fullDescription.innerHTML = truncatedText;
                readMoreBtn.querySelector('span').textContent = 'Read more';
                readMoreBtn.querySelector('svg').innerHTML = closeSvg;
            }
        });
    }
}