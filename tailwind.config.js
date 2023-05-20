const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Adamina', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    daisyui: {
        themes: [{
            mytheme: {
                "primary": "#15998E",
                "secondary": "#45B08C",
                "accent": "#48BCD1",
                "neutral": "#C0DCEC",
                "base-100": "#FFFFFF",
                "info": "#3ABFF8",
                "success": "#36D399",
                "warning": "#FBBD23",
                "error": "#F87272",
                "secondary-content": "#ffffff",
                "primary-content": "#ffffff"
            },
        }, "light", "dark", "cupcake", "bumblebee", "emerald", "emerald", "synthwave", "retro", "cyberpunk", "valentine", "halloween", "garden", "forest", "aqua", "lofi", "pastel", "fantasy", "wireframe", "black", "luxury", "dracula", "cmyk", "autumn", "business", "acid", "lemonade", "night", "coffee", "winter"],
    },

    plugins: [require('@tailwindcss/forms'), require("daisyui"),require('tailwind-scrollbar')],
};
