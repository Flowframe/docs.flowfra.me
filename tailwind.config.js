const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    mode: 'jit',

    darkMode: false,

    theme: {
        extend: {
            colors: {
                gray: colors.trueGray,
            },

            fontFamily: {
                heading: `'Space Grotesk', 'sans-serif'`,
                sans: `'Be Vietnam Pro', sans-serif`,
            },

            typography: theme => ({
                DEFAULT: {
                    css: {
                        'h2, h3, h4, h4': {
                            fontFamily: `'Space Grotesk', 'sans-serif'`,
                        },
                    },
                },
            }),
        },
    },

    plugins: [require('@tailwindcss/typography')],
}
