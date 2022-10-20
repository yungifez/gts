import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

const observer = new IntersectionObserver((enteries)=> {
  enteries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate-show');
      entry.target.classList.remove('animate-hide');
    }else{
      entry.target.classList.remove('animate-show');
      entry.target.classList.add('animate-hide');
    }
  });
});

const scrollElements = document.querySelectorAll('.animate-on-scroll');
scrollElements.forEach((el) => {  
  observer.observe(el)
}
);


