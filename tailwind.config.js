const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  mode: 'jit',
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Oxygen', ...defaultTheme.fontFamily.sans],
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
