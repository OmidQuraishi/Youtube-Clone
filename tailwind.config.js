/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        Poppins: "Poppins",
      },
      colors: {
        accent: "#27272b",
        hover: "#202022",
      },
    },
  },
  plugins: [],
};
