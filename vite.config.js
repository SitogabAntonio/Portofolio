import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import blade from 'vite-plugin-laravel-blade';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: false,
        }),
        blade({
            // Ini yang bikin @extends & @yield jalan tanpa PHP!
            input: 'resources/views/welcome.blade.php',
            output: 'dist/index.html',
        }),
    ],
    build: {
        outDir: 'dist',
        manifest: true,
        rollupOptions: {
            input: {
                main: 'resources/views/welcome.blade.php'
            }
        }
    }
});