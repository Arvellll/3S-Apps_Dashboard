import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/main/landing.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
