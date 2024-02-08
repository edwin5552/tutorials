self.addEventListener('install', (event) => {
	event.waitUntil(
		caches.open('app-cache').then((cache) => {
			return cache.addAll([
				'/',
				'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
				'./css/bootstrap.min.css',
				'./css/style.css',
				'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
				'./js/bootstrap.bundle.min.js',
				'./js/script.js',
				'./img/pamtree-icon-512.png',
			]);
		})
	);
});

self.addEventListener('fetch', (event) => {
	event.respondWith(
		caches.match(event.request).then((response) => {
			return response || fetch(event.request);
		})
	);
});
