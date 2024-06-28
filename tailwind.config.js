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
      backgroundImage: (theme) => ({
        landing: "url('/public/img/landing.jpg')",
        cards: "url('/public/img/flou.jpg')",
        bleu: "url('/public/img/post_it_bleu.svg')",
        jaune: "url('/public/img/post_it_jaune.svg')",
        rouge: "url('/public/img/post_it_rouge.svg')",
        lorem: "url('https://picsum.photos/400/200')",
      }),
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
