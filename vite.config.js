import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/css/base.css', 
            'resources/css/footer.css',
            'resources/css/header.css',
            'resources/css/budget.css',
            'resources/js/home.js',
            'resources/js/budget.js',
        ],
            refresh: true,
        }),
    ],
});
