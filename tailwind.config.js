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
      display: ['MontserratLocal', 'display']
    },
    extend: {
      backgroundImage: {
        'banner-fitacm': 'url(/img/banner/banner1.jpg)',
        'banner-three': 'url(/img/banner/banner3.jpg)',
        'banner-article': 'url(/img/banner/banner4.jpg)',
        'banner-officer': 'url(/img/banner/banner-officers.jpg)',
        'banner-about-header': 'url(/img/banner/banner-about.jpg)',
        'banner-about-acm': 'url(/img/banner/banner-about2.jpg)',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
