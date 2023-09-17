/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
            },
        },
        fontFamily: {
            poppins: ["Poppins", "san-serif"],
        },
        extend: {
            backgroundImage: {
                "landing-page": "url('../../img/w.webp')",
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
    ],
    darkMode: 'class',
};
