/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // primaryColor: "#023D79",
                primaryColor: "#17274B",
                secondaryColor: "#E5BC20",
            },
        },
    },
    plugins: [],
};
