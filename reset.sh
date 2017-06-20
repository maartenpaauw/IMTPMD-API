#!/usr/bin/env bash

php artisan migrate:refresh --seed
php artisan data:fake
