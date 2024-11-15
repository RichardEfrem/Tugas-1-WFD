/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container:{
      center: true,
      padding: '16px'
    },
    extend: {
      colors: {
        primary: '#f59e0b',
        bolderPrim: '#92400e',
        secondary: '#334155'
      },
      screens:{
        '2xl':'1320px'
      }
    },
  },
  plugins: [],
}

