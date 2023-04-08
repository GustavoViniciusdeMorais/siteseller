 #!/bin/bash
php artisan migrate:refresh
php artisan vendor:publish --tag=cms-seeders
php artisan db:seed --class=TemplateSeeder
php artisan db:seed --class=LinksSeeder
php artisan db:seed --class=ContactInfosSeeder
php artisan db:seed --class=PostSeeder
php artisan db:seed --class=MenuSeeder