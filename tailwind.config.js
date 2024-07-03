import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
            },
            fontWeight: {
                'thin': '100',
                'extralight': '200',
                'light': '300',
                'regular': '400',
                'medium': '500',
                'semibold': '600',
                'bold': '700',
                'extrabold': '800',
                'black': '900',
            },
            fontStyle: {
                'italic': 'italic',
                'normal': 'normal',
            },
        },
    },

    plugins: [forms],
};
