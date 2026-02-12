/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        rton: {
          red: '#b72025',
          dark: '#343b46',
          white: '#fdfdf5',
        }
      },
      fontFamily: {
        header: ['"General Sans"', 'sans-serif'],
        body: ['"Satoshi"', 'sans-serif'],
      },
      letterSpacing: {
        'rton-tight': '-0.05em',
      },
      lineHeight: {
        'rton-relaxed': '1.8',
      }
    },
  },
  plugins: [],
}