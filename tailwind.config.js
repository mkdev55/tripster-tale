/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
        'sans': ['ui-sans-serif', 'system-ui'],
        'serif': ['ui-serif', 'Georgia'],
        'mono': ['ui-monospace', 'SFMono-Regular',],
        'title': ['New Amsterdam'],
        'display': ['Oswald',],
        'body': ['"Open Sans"',],
    },
    extend: {},
  },
  plugins: [],
}

