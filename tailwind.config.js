const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        'source/**/*.html',
        'source/**/*.md',
        'source/**/*.js',
        'source/**/*.php',
        'source/**/*.vue'
    ],
    theme: {
        extend: {
            colors: {
                madison: '#2d3e50',
                niagara: {
                    light: '#1bb698',
                    DEFAULT: '#17a085'
                }
            },
            fontFamily: {
                sans: ['Karla', ...defaultTheme.fontFamily.sans],
            }
        },
    },
    plugins: [],
}
