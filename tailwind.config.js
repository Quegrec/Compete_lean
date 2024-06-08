/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig"
  ],
  theme: {
    extend: {
      colors: {
        'background': '#F1F9FF',
        'primary': '#27292E',
        'title': '#00062F',
        'cta': '#11C7D5',
      },
      fontFamily: {
        'default': 'Nunito Sans'
      },
    },
  },
  plugins: [],
}

