const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')


module.exports = {
    // purge: [
    //     './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    //     './storage/framework/views/*.php',
    //     './resources/views/**/*.blade.php',
    // ],

    theme: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                green: {
                    dark: '#0b6e4f' ,
                    light: '#e5f9e0',
                },

                purple: '#53599a',
                white: '#FFFFF',
            },
        
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
