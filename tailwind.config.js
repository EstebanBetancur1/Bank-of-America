/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#DC1431",
        secondary: "#0052C2",
        thir: "#afaeb3",

      },
    },
  },
  plugins: [],
}