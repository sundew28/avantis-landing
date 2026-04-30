import { defineConfig } from 'vite';
import path from 'path';

/**
 * Vite configuration for WordPress theme assets. 
 */
export default defineConfig({
	build: {
		outDir: 'dist',
		emptyOutDir: true,

		rollupOptions: {
			input: path.resolve(__dirname, 'src/js/main.js'),

			output: {
				entryFileNames: 'js/main.js',

				assetFileNames: (assetInfo) => {
					if (assetInfo.name && assetInfo.name.endsWith('.css')) {
						return 'css/main.css';
					}

					return 'assets/[name][extname]';
				},
			},
		},
	},
});