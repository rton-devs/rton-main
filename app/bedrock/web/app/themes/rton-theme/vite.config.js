import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin'
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin';

export default defineConfig({
  // Zorg dat 'sage' hier de naam van je thema-map is op de T7
  base: '/app/themes/rton-theme/public/build/', 

  plugins: [
    tailwindcss(),
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/editor.css',
        'resources/js/editor.js',
      ],
      refresh: true,
      // We vertellen de plugin hier expliciet waar de site woont
      // Dit vervangt de noodzaak voor de APP_URL in de terminal
      devUrl: 'https://rton.local', 
    }),

    wordpressPlugin(),

    wordpressThemeJson({
      disableTailwindColors: false,
      disableTailwindFonts: false,
      disableTailwindFontSizes: false,
    }),
  ],

  // DIT IS HET BLOK DAT JE NODIG HEBT VOOR JE LOCAL SETUP:
  server: {
    proxy: {
      '^/(wp-content|wp-includes|wp-admin|index.php)': 'https://rton.local',
    },
    host: 'localhost',
    port: 3000,
    strictPort: true,
    cors: true, // Cruciaal voor HMR
    hmr: {
      host: 'localhost',
      protocol: 'ws', // Gebruik het websocket protocol
    },
  },

  resolve: {
    alias: {
      '@scripts': '/resources/js',
      '@styles': '/resources/css',
      '@fonts': '/resources/fonts',
      '@images': '/resources/images',
    },
  },
})