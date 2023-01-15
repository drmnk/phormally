/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Sofia Sans', ...defaultTheme.fontFamily.sans]
      },
      scale: {
        'flip': '-1'
      }
    },
  },
  plugins: [],
}
