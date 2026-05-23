import '../css/app.css';
import '../css/portfolio-style.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';

// Import Komponen Partial secara Global
import Sidebar from './Components/sidebar.vue';
import Navbar from './Components/navbar.vue';

createInertiaApp({
    // Menggunakan skrip pencarian komponen yang lebih aman dari kegagalan 'undefined'
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue');
        if (!pages[`./Pages/${name}.vue`]) {
            throw new Error(`Komponen Halaman ./Pages/${name}.vue tidak ditemukan! Periksa kembali huruf besar-kecil pada nama file.`);
        }
        return pages[`./Pages/${name}.vue`]().then(module => module.default);
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        
        app.use(plugin);
        
        // Mendaftarkan komponen secara global
        app.component('Sidebar', Sidebar);
        app.component('Navbar', Navbar);
        
        app.mount(el);
    },
});