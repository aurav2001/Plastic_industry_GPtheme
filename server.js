const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = process.env.PORT || 3000;
const ROOT = __dirname;

const MIME_TYPES = {
    '.html': 'text/html; charset=utf-8',
    '.css': 'text/css; charset=utf-8',
    '.js': 'text/javascript; charset=utf-8',
    '.json': 'application/json',
    '.png': 'image/png',
    '.jpg': 'image/jpeg',
    '.jpeg': 'image/jpeg',
    '.svg': 'image/svg+xml',
    '.gif': 'image/gif',
    '.webp': 'image/webp',
    '.ico': 'image/x-icon',
    '.woff': 'font/woff',
    '.woff2': 'font/woff2',
    '.ttf': 'font/ttf'
};

const server = http.createServer((req, res) => {
    let reqUrl = decodeURI(req.url.split('?')[0]);
    if (reqUrl === '/' || reqUrl === '') {
        reqUrl = '/index.html';
    }

    let filePath = path.join(ROOT, reqUrl);

    // If requesting a clean route like /about or /about/, check if /about.html exists
    if (!path.extname(filePath)) {
        const cleanPath = reqUrl.replace(/\/+$/, '');
        const candidateHtml = path.join(ROOT, cleanPath + '.html');
        if (fs.existsSync(candidateHtml)) {
            filePath = candidateHtml;
        }
    }

    // Prevent directory traversal
    if (!filePath.startsWith(ROOT)) {
        res.writeHead(403, { 'Content-Type': 'text/plain' });
        res.end('Access Denied');
        return;
    }

    fs.stat(filePath, (err, stats) => {
        if (err || !stats.isFile()) {
            // Check if there's an index.html in the directory or fallback
            const candidateIndex = path.join(filePath, 'index.html');
            if (!err && stats.isDirectory() && fs.existsSync(candidateIndex)) {
                filePath = candidateIndex;
            } else {
                fs.readFile(path.join(ROOT, 'index.html'), (err404, fallbackContent) => {
                    if (err404) {
                        res.writeHead(404, { 'Content-Type': 'text/plain' });
                        res.end('File Not Found');
                    } else {
                        res.writeHead(200, { 'Content-Type': 'text/html; charset=utf-8' });
                        res.end(fallbackContent);
                    }
                });
                return;
            }
        }

        const ext = path.extname(filePath).toLowerCase();
        const contentType = MIME_TYPES[ext] || 'application/octet-stream';

        fs.readFile(filePath, (readErr, content) => {
            if (readErr) {
                res.writeHead(500, { 'Content-Type': 'text/plain' });
                res.end('Server Error');
                return;
            }

            res.writeHead(200, { 
                'Content-Type': contentType,
                'Cache-Control': 'no-store, no-cache, must-revalidate, max-age=0',
                'Pragma': 'no-cache',
                'Expires': '0'
            });
            res.end(content);
        });
    });
});

server.listen(PORT, () => {
    console.log(`Server successfully started at http://localhost:${PORT}`);
});
