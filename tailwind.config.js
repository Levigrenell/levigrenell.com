/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      screens: {
        "sm":"480px"
      },
      spacing: {
        "big":"48rem"
      }
    },
    fontFamily:{
      Helvetica:[ 'courier prime', 'sans-serif']
    }
  },
  plugins: [],
}

