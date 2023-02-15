/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        spacing: {
          '128': '32rem',
        },
        width: {
          '128': '32rem',
        },
        screens: {
          '3xl': '1600px',
        },
      },
    },
    plugins: [],
  }