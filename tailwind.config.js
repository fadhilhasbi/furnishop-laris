/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    fontFamily: {
        primary: "'Roboto', sans-serif",
      },
      container: {
        center: true,
        padding: '1rem'
      },
      screens: {
        sm: '576px',
        md: '768px',
        lg: '992px',
        xl: '1200px'
      },
      extend: {
        colors: {
          primary: '#FF515A',
          secondary: '#F5E6E0'
        },
      },
  },
  plugins: [],
}

