import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                // Backgrounds colors
                bgPrimary: 'rgb(213, 235, 255)',
                bgSecondary: 'rgb(255, 253, 253)',
        
                // Flaschards and inputs background
                fcColor: 'rgb(246, 251, 255)',
                bgInput2: 'rgb(246, 251, 255)',
        
                // Text color
                txtColor: 'rgb(0, 10, 12)',
        
                // Cards, buttons, ...
                primary: 'rgb(1, 40, 154)',
                stroke: 'rgb(1, 40, 154, .1)',
            },
              
            fontFamily: {
              tillana: ['tillana'],
              raleway: ['raleway'],
            }
        },
        boxShadow: {
          'buttonShadow': '0px 1px 3px 0px slategrey',
        },
        screens: {
          'sp': '320px',
          'sm': '640px',
          'md': '768px',
          'lg': '1024px',
          'xl': '1280px',
          '2xl': '1536px'
        }
    },

    plugins: [forms],
};
