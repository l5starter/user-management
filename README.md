# L5Start\UserManagement

## Installation

In order to install Laravel 5, just add

``` php
"l5starter/user-management": "5.4.x-dev"
```
to your composer.json. Then run `composer install` or `composer update`.

Then in your `config/app.php` add in `providers`

``` php
L5Starter\UserManagement\UserManagementServiceProvider::class,
```

Add menu in `resources/views/vendor/l5starter/admin/partials/sidebar.blade.php`

``` html
<li class="{{ (Request::is('admin/users*') ? 'active' : '') }}">
    <a href="{{ route('admin.users.index') }}">
        <i class="fa fa-user"></i> <span>{{ trans('l5starter::general.users') }}</span>
    </a>
</li>
```
