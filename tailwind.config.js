/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            'xxxs': {'max': '420px'},
            'xxs': {'max': '490px'},
            'xs': {'max': '544px'},
            'sm': {'max': '544px'},
            'medium': {'max': '700px'},
            'md': {'min': '768px'},
            'lg': {'min': '992px'}
        },
        container: {
            center: true,
            padding: "150px"
        },
        extend: {},
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio")
    ],
}
