import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'carrot': {
                    '50': '#fffcea',
                    '100': '#fff5c5',
                    '200': '#ffeb85',
                    '300': '#ffda46',
                    '400': '#ffc71b',
                    '500': '#ffa500',
                    '600': '#e27c00',
                    '700': '#bb5502',
                    '800': '#984208',
                    '900': '#7c360b',
                    '950': '#481a00',
                },
            },
        },
    },

    plugins: [forms, typography],
};
