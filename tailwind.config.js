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
      backgroundImage:{
        fondSombre: "url('/public/img/FONDSOMBRE.svg')",
        fondClair: "url('/public/img/FONDCLAIR.svg')",
        formejaune: "url('/public/img/FormeJaune.svg')",
        formebleue: "url('/public/img/FormeBleue.svg')",
        formerouge: "url('/public/img/FormeRouge.svg')",
        fondvert: "url('/public/img/FondVert.svg')",
        fondbleu: "url('/public/img/FondBleu.svg')",
        fondrouge: "url('/public/img/FondRouge.svg')",
        lorem: "url('https://picsum.photos/400/200')",
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
