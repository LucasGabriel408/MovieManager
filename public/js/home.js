const container = document.querySelector('.container');
const synopsis = document.querySelector('.movie-synopse');
const linkDetails = document.querySelector('.see-details');

if (container && synopsis && linkDetails) {
    container.addEventListener('mouseenter', () => {
        setTimeout(() => {
            container.classList.add('active');
            synopsis.classList.add('visible');
            linkDetails.classList.add('visible');
        }, 1000)
    });

    container.addEventListener('mouseleave', () => {
        container.classList.remove('active');
        synopsis.classList.remove('visible');
        linkDetails.classList.remove('visible');
    });

}
