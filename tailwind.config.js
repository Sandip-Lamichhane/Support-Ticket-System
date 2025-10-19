/** @type {import('tailwindcss').Config} */
const config = {
  content: [
    './resources/**/*.blade.php',    // Laravel Blade files
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#CEE1FF',
        white: '#FFFFFF',
        tpurple: '#6A1B9A',
        tblack: '#333333',
        jpurple: '#9C4DC2',
        boxcolor: '#F3E5F5',
        black: '#000000',
        background: '#1F2937',
      },
    },
  },
  plugins: [],
}

export default config