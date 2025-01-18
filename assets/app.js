
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/picture.css';
import './styles/order.css';
import "./styles/navBar.css";
import "./styles/homePage.css";
import "./styles/footer.css";
import './styles/app.css';
import './styles/login.css';
import './styles/privacy.css';


const lightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    zoomable: true,
    draggable: true,
    preload: true, // Précharge les images suivantes dans la galerie
    autoplayVideos: false,
    loader: true, // Affiche un indicateur de chargement pendant que l'image se charg
});


console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
