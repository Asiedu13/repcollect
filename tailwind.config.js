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
                slideLeft: "slideLeft 1s infinite"
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

                slideLeft: {
                    "0%, 100%": {
                        transform: "translateX(-25%)",
                        animationTimingFunction: "cubic-bezier(0.8, 0, 1, 1)",
                        },
                    "50%": {
                        transform: "translateX(0)",
                        animationTimingFunction: "cubic-bezier(0, 0, 0.2, 1)"
  }
                }
            },
        },
    },
    plugins: [],
};
