- laravel new project
- change envs  
- php artisan make:model Xxxxx --migration
- create entitie columns in db migrations
- edit models: create entities and relations with schema
- poblete using seeders 
php artisan make:seeder XxxxxSeeder
- edit file seeder with data structure

- inertia for work vue in pannel admin
composer require laravel/jetstream
composer require spatie/laravel-permission
- roles and permissions structure manage with spartie
-public vendors most important. execute only once migrations
php artisan vendor:publis --provider="Spatie\Permission\PermissionServiceProvider"
- load migrations
php artisan migrate
- on model, in this case, add thread 'HasRoles', but indicate this model contein roles. spartie execute settings us.
- poblate structure on user model with admin and edit use seeder
php artisan make:seeder RolesSeeder
- edit roleseeder 
- add admin and edit on run function
- create premissions crud roles and taxonomy
- define structure by permissions by roles 
- generate default user admin
php artisan make:seeder UserSeeder and Role
- see doc
php artisan migrate:reset
php artisan db:seed --class=RolesSeeder --class=UserSeeder
- add util for consulting roles. server views. 
- static value for roles an permissions 

on middleware handleindetiareq, manage reque.
define default share props
