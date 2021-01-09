const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            indigo:{
                light: '#667eea',
            }
        }
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },
    extend: {
        // ...
       tableLayout: ['hover', 'focus'],
       textDecoration: ['active'],
    },
    plugins: [require('@tailwindcss/ui')],
};
