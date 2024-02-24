const theme = require('./theme.json');
const helper = require('thetheme-helper');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './src/css/*.css',
    './src/js/*.js',
    './safelist.txt'
],
  theme: {
    fontFamily: {
      sans: ['"Inter"', 'sans-serif']
    },
    extend: {
      colors: helper.colorMapper(helper.theme('settings.color.palette', theme)),
      fontSize: helper.fontSizeMapper(helper.theme('settings.typography.fontSizes', theme))
  },
  },
  plugins: [
    helper.tailwind
  ],
}