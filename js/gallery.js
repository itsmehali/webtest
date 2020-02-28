const galleryImages = document.querySelectorAll(".gallery-img");
const getLatestOpenedImg;
const windowWidth = window.innerWidth;

if(galleryImages) {
    galleryImages.forEach(function(image) {
        image.onclick = function() {
            const getElementCss = window.getComputedStyle(image);
            const getFullImgUrl = getElementCss.getPropertyValue("background-image");
            const getImgUrlPos = getFullImgUrl.split("");
        }
    });
}