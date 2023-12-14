import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import WindiCSS from 'vite-plugin-windicss';


export default defineConfig({
    plugins: [
        WindiCSS(),

        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
