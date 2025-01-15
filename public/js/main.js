document.addEventListener("DOMContentLoaded", function () {
    function isNotMobile() {
        return window.innerWidth > 912;
    }

    function isMobile() {
        return window.innerWidth <= 912;
    }

    function isNotHomePage() {
        return window.location.pathname !== '/' &&
            window.location.pathname !== '/login' &&
            window.location.pathname !== '/register';
    }

    function applyStylesBasedOnConditions() {
        if (isNotMobile() && isNotHomePage()) {

            const innerBrand = document.querySelector('.header.header-transparent .inner-brand');
            if (innerBrand) {
                innerBrand.style.color = 'black';
            }

            const navLinks = document.querySelectorAll('.header.header-transparent .dop-nav > ul > li > a, .header.header-transparent .inner-nav > ul > li > a');
            navLinks.forEach(link => {
                link.style.color = 'black';
            });
        }
    }

    function removePaddingForModuleMobile() {
        if (isMobile() && isNotHomePage()) {

            const paddingTop = document.querySelector('.header + .wrapper .module:first-child');
            if (paddingTop) {
                paddingTop.style.paddingTop = 0;
            }

            const module = document.querySelectorAll('.module');
            if (module) {
                module.style.paddingTop = 0;
            }
        }
    }

    applyStylesBasedOnConditions();
    removePaddingForModuleMobile();
});

function checkFileUpload() {
    const fileInput = document.getElementById('file');
    const statusText = document.getElementById('statusText');
    const uploadButton = document.getElementById('uploadButton');
    if (fileInput.files.length > 0) {
        statusText.textContent = `File selected: ${fileInput.files[0].name}`;
        statusText.classList.remove('error', 'uploading');
        statusText.classList.add('uploaded');
        uploadButton.disabled = false;
    } else {
        statusText.textContent = 'No file selected';
        statusText.classList.remove('uploaded', 'error');
        statusText.classList.add('uploading');
        uploadButton.disabled = true;
    }
}
