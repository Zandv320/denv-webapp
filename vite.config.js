import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    resolve: {
        alias: {
            '@fonts': '/resources/fonts',
        },
    },
    server: process.env.IS_DDEV_PROJECT ? {
        strictPort: true,
        host: true,
        hmr: {
            host: process.env.DDEV_HOSTNAME.split(',')[0],
            protocol: 'wss',
        },
    } : {},
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            publicDirectory: 'public',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        tailwindcss(),
    ],
});
