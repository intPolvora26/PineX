module.exports = {
  content: ["./includes/**/*.php", "./*.php"],
  theme: {
    extend: {
      colors: {
        pinex: {
          primary: '#1a5c36',
          accent: '#10b981',
          dark: '#0f172a',
          light: '#f8fafc'
        }
      },
      fontFamily: {
        title: ['"Exo 2"', 'sans-serif'],
        text: ['"Open Sans"', 'sans-serif'],
      }
    }
  }
}
