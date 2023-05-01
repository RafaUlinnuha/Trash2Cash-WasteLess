/** @type {import('tailwindcss').Config} */
const { iconsPlugin, getIconCollections } = require("@egoist/tailwindcss-icons")

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
    },
  },
  plugins: [
    iconsPlugin({
      collections: getIconCollections(["mdi", "bi", "carbon", "ri", "material-symbols", "ion"]),
    })
  ],
}