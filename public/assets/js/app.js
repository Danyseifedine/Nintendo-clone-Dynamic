// importing global components only
(function(global) {
    global.displayAppInfo = function() {
        const pixel38Logo = `
        ██████╗ ██╗██╗  ██╗███████╗██╗     ██████╗   █████╗
        ██╔══██╗██║╚██╗██╔╝██╔════╝██║     ╚════██╗ ██╔══██╗
        ██████╔╝██║ ╚███╔╝ █████╗  ██║      █████╔╝ ╚█████╔╝
        ██╔═══╝ ██║ ██╔██╗ ██╔══╝  ██║          ██  ██╔══██╗
        ██║     ██║██╔╝ ██╗███████╗███████╗██████╗  ╚█████╔╝
        ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝  ╚════╝
        `;

        // Project info
        const projectInfo = `
        🎮 Nintendo Store Clone (Dynamic)

        GitHub: https://github.com/Danyseifedine/nintendo-clone-dynamic

        ⏱️ Development Time: 8 hours and 32 minutes

        SHE8EL NDIF ❤️
        `;

        // Log everything to console with styling
        console.log('%c' + pixel38Logo, 'color: #6a5acd; font-weight: bold;');
        console.log('%c' + projectInfo, 'color: #ff6347; font-size: 12px;');
        console.log('%cThank you for exploring this project!', 'color: #6a5acd; font-size: 16px; font-weight: bold;');
    };
})(window);



import initializeNavigationDropdown from './global/desktop/navigationDropdown.js';
import "./global/mobile/mobileNavigation.js";
import "./global/desktop/authDrawer.js";


document.addEventListener('DOMContentLoaded', function () {
    if (window.location.pathname.includes('products')) {
        initializeNavigationDropdown();
    }
    displayAppInfo();
});
