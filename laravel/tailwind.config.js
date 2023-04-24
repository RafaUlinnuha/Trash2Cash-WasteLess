/** @type {import('tailwindcss').Config} */
const { iconsPlugin, getIconCollections } = require("@egoist/tailwindcss-icons")

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    iconsPlugin({
      // Select the icon collections you want to use
      collections: getIconCollections(["mdi", "lucide"]),
    }),
  ],
}