/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.html', './src/**/*.ts', './**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        "circular-spotify-txt": ['Circular Spotify TxT', 'sans-serif'],
      },
      colors: {
        red: {
          500: '#FF0000',
          600: '#d90000'
        },
        gray: {
          500: '#5A5A5A',
          800: '#121212'
        }
      },
      animation: {
        'slide-up': 'slideUp .6s linear forwards',
      },
      keyframes: {
        slideUp: {
          '0%': { transform: 'translateY(2rem)', opacity: 0 },
          '100%': { transform: 'translateY(0)' ,opacity: 1},
        }
      },
    },
    textSizes: {
      lg: {
        min: '26px',
        max: '40px',
        minvw: '320px',
        maxvw: '1280px'
      }
    },

  },
  plugins: [require("tailwindcss-animation-delay")],
}

