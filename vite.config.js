// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  // Specify the entry points for your application
  build: {
    outDir: 'public/build', // Output directory for the built files
    manifest: true, // Generate manifest.json for better asset management
    rollupOptions: {
      input: {
        app: 'resources/js/app.js', // Entry point for your JavaScript
        styles: 'resources/css/app.css', // Entry point for your CSS
      },
    },
  },
});
