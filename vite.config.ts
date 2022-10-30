import * as process from 'process'

import {defineConfig} from 'vite'
import liveReload from 'vite-plugin-live-reload'

// https://vitejs.dev/config/
export default defineConfig({
    root: './src',
    base: '/',
    build: {
        manifest: true,
        emptyOutDir: true,
        outDir: '../assets/js/dist',
        assetsDir: '',
        rollupOptions: {
            input: 'src/index.ts'
        }
    },
    server: {
        cors: true,
        host: 'localhost',
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'localhost',
            port: 5173,
            protocol: 'ws',
            overlay: true,
        }
    },
    plugins: [
        liveReload('../includes/**/*\.php')
    ]
})
