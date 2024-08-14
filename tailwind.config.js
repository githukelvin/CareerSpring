import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        colors: {
            transparent: "transparent",
            primary: {
                500: "#008345",
                400: "#25935E",
                300: "#4BA278",
                200: "#70B291",
                100: "#95C1AA",
            },
            accent: {
                200: "#C6A465",
                100: "#DDC399",
            },
            neutral: {
                100: "#E5E5E5",
                200: "#D8D8D8",
                300: "#CAC9C9",
                400: "#B8B8B8",
                500: "#AAAAAA",
                600: "#9F9F9F",
                700: "#909090",
                800: "#7F7F7F",
                900: "#676666",
            },
            white: "#fff",
            black: {
                200: "#141414",
                100: "#212121",
            },
            red: {
                600: "#b60c0c",
                100: "#212121",
            },
            gray: "#E5E5E5",
            bluish: "#09136A",
        },
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
