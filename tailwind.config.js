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
        'primary': '#252525',
        'secondary': '#DBF1FB',
        'title': '#00062F',
        'cta': '#F8D595',
      },
      backgroundImage: {
        landing: "url('/public/img/landing.jpg')",
        cards: "url('/public/img/flou.jpg')",
        bleu: "url('/public/img/VectorBleu.svg')",
        jaune: "url('/public/img/VectorJaune.svg')",
        rouge: "url('/public/img/VectorRouge.svg')",
      },
      backgroundSize: {
        'cover': 'cover',
      },
      fontFamily: {
        title: ['THE BOLD FONT', 'sans-serif'],
        body: ['Questrial', 'sans-serif'],
        cta: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

