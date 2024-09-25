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
                'khand': ['Khand', 'sans-serif'],
                'khand-bold': ['Khand-Bold', 'sans-serif'],
                'khand-light': ['Khand-Light', 'sans-serif'],
                'khand-medium': ['Khand-Medium', 'sans-serif'],
                'khand-semibold': ['Khand-SemiBold', 'sans-serif'],
            },
            colors: {
                'random': '#d7edbb',
                'random2': '#738062',
                'random3': '#c9e2a7',
                'somewhite': '#ecf1e4',
                'cream': '#FFF6E5',
                'somegreen': '#9db77a',
                'somepink': '#fc9288',
            },
        },
    },

    plugins: [forms, typography],
};
