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
        brand: {
          brown: '#5C4033',
          cream: '#F5E6CA',
          orange: '#E49B0F',
        }
      }
    },
  },
  plugins: [],
}