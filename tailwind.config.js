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
        'primary': '#714AE1',
        'subtext': '#092540',

      },
      fontFamily: {
        'sans': ['-apple-system', 'BlinkMacSystemFont'],
        'serif': ['Georgia', 'Cambria'],
        'mono': ['SFMono-Regular', 'Menlo'],
        'poppins': ['Poppins']
       },
       backgroundImage: {
        'landing': "{{ asset('/img/bg_landing.svg') }}",
      },
    },
  },
  plugins: [],
}

