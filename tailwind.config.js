/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "../**/*.php"
  ],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
    },
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors:{
        'primary': '#7c3aed'
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms')
  ],
}

