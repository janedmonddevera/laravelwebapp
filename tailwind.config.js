/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'pos-bg': "url('/images/pos_background.jpg')",
        
      }
    },
  },
  plugins: [],
}

