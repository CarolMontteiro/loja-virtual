/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
      container: {
          padding:
              '2rem',
      },
    extend: {
        container: {
            // default breakpoints but with 40px removed
            screens: {
                sm: '640px',
                md: '768px',
                lg: '1024px',
                xl: '1200px',
                xll: '1496px',
            },
            center: true,
            padding: {
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },

    },
  },
  plugins: [],
}

