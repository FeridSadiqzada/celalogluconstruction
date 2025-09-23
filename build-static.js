import fs from 'fs';
import path from 'path';

// Create dist directory
if (!fs.existsSync('dist')) {
    fs.mkdirSync('dist');
}

// Copy index.html to dist
fs.copyFileSync('index.html', 'dist/index.html');

// Copy public assets if they exist
if (fs.existsSync('public')) {
    const publicFiles = fs.readdirSync('public');
    publicFiles.forEach(file => {
        if (file !== 'index.php' && file !== 'index.html') {
            const srcPath = path.join('public', file);
            const destPath = path.join('dist', file);
            
            if (fs.statSync(srcPath).isDirectory()) {
                fs.cpSync(srcPath, destPath, { recursive: true });
            } else {
                fs.copyFileSync(srcPath, destPath);
            }
        }
    });
}

console.log('✅ Static build completed in dist/ folder');
console.log('📁 Files ready for Vercel deployment');