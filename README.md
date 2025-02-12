# ✨Message Capsules 5000 API✨

## Tech stack
- php 8.1
- Laravel 10
- PHPUnit

```sh
git clone https://github.com/jason37/mc5k-api.git
cd mc5k-api
php composer.phar install
php artisan migrate --seed
php artisan serve
```

At this point the API service should be available at http://localhost:8000.

## Testing
To run feature tests
```sh
php artisan test
```

## Next steps
See [https://github.com/jason37/mc5k-app](https://github.com/jason37/mc5k-app) for steps to set up the Vue front end.
