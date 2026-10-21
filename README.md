
## Kopi Tubruk

Kopi Tubruk is a commercial website for a Kopi Tubruk coffee company. It brings together an online product showcase and a company profile, giving visitors a place to explore the coffee and learn about the business.

The site includes public home, product, and about pages, along with authenticated administration for managing product listings. Laravel handles the application backend, while Vue provides the interactive frontend. Inertia connects the two, allowing the app to deliver a single-page application (SPA) experience without separating the frontend and backend into different projects.

## Technology Stack

- **Backend:** Laravel 9 and PHP
- **Frontend:** Vue 3
- **Backend-to-frontend integration:** Inertia.js
- **Assets and development server:** Vite
- **UI toolkit:** Bootstrap 5

## Getting Started

### Requirements

- PHP 8.0.2 or later
- Composer
- Node.js and npm
- A database supported by Laravel

### Installation

1. Install the project dependencies:

	```bash
	composer install
	npm install
	```

2. Create the environment file and application key:

	```bash
	cp .env.example .env
	php artisan key:generate
	```

3. Configure the database connection in `.env`, then run the migrations and seeders:

	```bash
	php artisan migrate --seed
	```

4. Start the Laravel and Vite development servers in separate terminals:

	```bash
	php artisan serve
	```

	```bash
	npm run dev
	```

## Production Build

Compile the frontend assets for production with:

```bash
npm run build
```


