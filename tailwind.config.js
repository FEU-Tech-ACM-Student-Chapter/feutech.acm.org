module.exports = {
  content: [
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/**/*.blade.php',
  ],
  theme: {
    fontFamily: {
      sans: ['Montserrat', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
