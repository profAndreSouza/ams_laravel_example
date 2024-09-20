# Criação do projeto
composer create-project laravel/laravel:^9.0 new_library


## Criação dos modelos com as respectivas migrações
php artisan make:model Book --migration

php artisan make:model Category --migration


## Criação da migração da entidade associativa
php artisan make:migration create_book_category_table

## Após a definição dos campos nas migrações, aplicamos a migração
php artisan migrate


## Criação dos controllers
php artisan make:controller BookController

php artisan make:controller CategoryController

php artisan make:controller HomeController

