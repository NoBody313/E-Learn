/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme';

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                plusjkt: ['"Plus Jakarta Sans"', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
