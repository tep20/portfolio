import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import vue from '@vitejs/plugin-vue'; // 1. TAMBAHKAN IMPORT INI

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        // 2. TAMBAHKAN BLOK KONFIGURASI VUE INI
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
                compilerOptions: {
                    // Mengizinkan penggunaan tag <ion-icon> dari Ionicons
                    isCustomElement: (tag) => tag === 'ion-icon'
                }
            },
        }),
    ],
    css: {
        devSourcemap: false // Mematikan pemetaan CSS yang memicu eval
    },
    build: {
        sourcemap: false // Mematikan source map JS yang memicu eval
    },
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});