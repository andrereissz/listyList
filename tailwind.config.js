/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [
        require('daisyui'),
    ],

    daisyui: {
        themes: [
          {
            mytheme: {

   "primary": "#E57C04",

   "secondary": "#454E9E",

   "accent": "#f43f5e",

   "neutral": "#5A3A31",

   "base-100": "#EEF5DB",

   "info": "#0089ff",

   "success": "#16a34a",

   "warning": "#facc15",

   "error": "#dc2626",
            },
          },
        ],
      },
  }
