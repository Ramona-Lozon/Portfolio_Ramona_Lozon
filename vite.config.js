import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  server: {
    host: '0.0.0.0',
    cors: true,
    hmr: {
      //be sure this is set to your LAN's ip address when running a local server
      host: '192.168.2.14',
    },
  },
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js',
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'
            ],
            refresh: true,
        }),
        vue(),
    ],
});