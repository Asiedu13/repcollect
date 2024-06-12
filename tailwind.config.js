/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                move: "move 1s ease-in-out infinite",
                rotate: "rotate 1s ease-in-out infinite",
            },
            keyframes: {
                rotate: {
                    "100%": {
                        transform: "translateX(-50%) rotate(360deg)",
                    },
                },
                move: {
                    "0%": { transform: "rotate(10deg)" },
                    "100%": { transform: "rotate(-10deg)" },
                },
            },
        },
    },
    plugins: [],
};
