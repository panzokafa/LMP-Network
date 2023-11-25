/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#222222",
                secondary: "#F5E6E0",
                biru: "#1780BB"
            },
        },
        fontFamily: {
            primary: "Poppins",
        },
    },
    plugins: [],
};
