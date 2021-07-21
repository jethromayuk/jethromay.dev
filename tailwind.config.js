const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  mode: 'jit',
  important: true,
  purge: [
    'source/**/*.html',
    'source/**/*.md',
    'source/**/*.js',
    'source/**/*.php',
    'source/**/*.vue',
  ],
  options: {
    whitelist: [
      /hljs/,
    ],
  },
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
    theme: {
        colors: {
          transparent: 'transparent',
          current: 'currentColor',
          black: colors.black,
          white: colors.white,
          gray: colors.trueGray,
          blue: colors.blue,
          green: colors.green,
        }
      }
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
