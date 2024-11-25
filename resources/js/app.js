import './bootstrap';
import { gsap } from 'gsap';
import { TextPlugin } from "gsap/TextPlugin";
import { Chart } from 'chart.js/auto'
import Alpine from 'alpinejs';


gsap.registerPlugin(TextPlugin);

window.gsap = gsap;
window.Chart = Chart;



window.Alpine = Alpine;

Alpine.start();