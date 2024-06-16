import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {

    darkMode: 'selector',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {},

    plugins: [
        require('daisyui'),],

    daisyui: {
        themes: [
          {
            mytheme: {
                "primary": "#E57C04",

                "secondary": "#454E9E",

                "accent": "#f43f5e",

                "neutral": "#5A3A31",

                "base-100": "#fef3e7",

                "info": "#0089ff",

                "success": "#16a34a",

                "warning": "#facc15",

                "error": "#dc2626",
            },
          },
        ],
    },
};
