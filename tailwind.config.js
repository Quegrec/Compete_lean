/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./assets/img/*.svg",
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
        bleu: "url('/public/img/post_it_bleu.svg')",
        jaune: "url('/public/img/post_it_jaune.svg')",
        rouge: "url('/public/img/post_it_rouge.svg')",
      },
      backgroundSize: {
        'cover': 'cover',
      },
      fontFamily: {
        title: ['THEBOLDFONT', 'sans-serif'],
        content: ['Questrial', 'sans-serif'],
        cta: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
