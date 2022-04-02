const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        colors: {
            white: { DEFAULT: "#FFFFFF" },
            purple: { 400: "#7100F5" },
            red: { DEFAULT: "#FF0000" },
            yellow: { DEFAULT: "FFFF00" },
            green: { DEFAULT: "00FF00" },
            black: { DEFAULT: "#000000" },
            gray: { DEFAULT: "#808080" },

            blue: { 400: "#42B0F5", 800: "#1F2937", DEFAULT: "#00FFFF" },
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
