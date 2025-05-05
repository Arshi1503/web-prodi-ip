/** @type {import('tailwindcss').Config} */
export default {
  prefix: 'tw-',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#b98e44',
        secondary: '#c09956',
        accent: '#0000ff',
      }
    },
  },
  plugins: [],
}

