const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {},
    theme: {
        colors: {
          transparent: 'transparent',
          current: 'currentColor',
          black: colors.black,
          white: colors.white,
          gray: colors.trueGray,
          blue: colors.blue
        }
      }
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
