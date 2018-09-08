module.exports = {
  /*
  ** Headers of the page
  */
  head: {
    title: 'photos',
    script: [
      { src: '/js/jquery-1.7.min.js'},
      { src: '/js/jquery.easing.1.3.js'},
      { src: '/js/tms-0.4.1.js'},
    ],
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'Nuxt.js project' }
    ],
    link: [
      { rel: 'stylesheet', type: 'text/css', href: '/css/reset.css' },
      { rel: 'stylesheet', type: 'text/css', href: '/css/grid_24.css' },
      { rel: 'stylesheet', type: 'text/css', href: '/css/style.css' },
      { rel: 'stylesheet', type: 'text/css', href: '/css/slider.css' },
      { rel: 'stylesheet', type: 'text/css', href: '/css/demo.css' },
      { rel: 'stylesheet', type: 'text/css', href: '/css/ie.css' },
      { rel: 'stylesheet', type: 'text/css', href: 'http://fonts.googleapis.com/css?family=Great+Vibes' },
      { rel: 'stylesheet', type: 'text/css', href: 'http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' },
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },
  /*
  ** Customize the progress bar color
  */
  loading: { color: '#3B8070' },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** Run ESLint on save
    */
    extend (config, { isDev, isClient }) {
      if (isDev && isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    }
  }
}

