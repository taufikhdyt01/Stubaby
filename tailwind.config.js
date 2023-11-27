import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'poppins': ['Poppins']
            },
            colors: {
                'primary': '#714AE1',
                'subtext': '#092540',
                'blek' : '#2C2E3D',
              },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
      ],

      
};
