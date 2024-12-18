import './bootstrap';
import { gsap } from 'gsap';
import { TextPlugin } from "gsap/TextPlugin";
import { Chart } from 'chart.js/auto'
import Alpine from 'alpinejs';

// Default theme
import '@splidejs/splide/css';

import Splide from '@splidejs/splide';
window.Splide = Splide;

gsap.registerPlugin(TextPlugin);

window.gsap = gsap;
window.Chart = Chart;


window.Alpine = Alpine;

console.log(Splide);
Alpine.start();