# laravel 11 Impersonate
This demo showcases a complete setup for Laravel Impersonate, including routing, middleware, and controller logic, to help you quickly get started with this powerful feature.

Feel free to clone, explore, and adapt it to your needs. Contributions and feedback are welcome!

## Contact:
[![image](https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:variyahardik11@gmail.com)
[![image](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/hardik-variya)
[![image](https://img.shields.io/badge/UpWork-6FDA44?style=for-the-badge&logo=Upwork&logoColor=white)](https://www.upwork.com/freelancers/variyahardik)

## Installation:

## Documents:

Laravel Document : https://laravel.com/docs/11.x/

Laravel  impersonate git: https://github.com/404labfr/laravel-impersonate

## Installation:

1. Create Project:
```
composer create-project laravel/laravel laravel-11-example

```

2. Install Breeze:
```
composer require laravel/breeze

php artisan breeze:install
```

3. Require it with Composer:
```
composer require lab404/laravel-impersonate
```

3. Add the service provider:
```
'providers' => [
    // ...
    Lab404\Impersonate\ImpersonateServiceProvider::class,
],

```

4. Configure database connection:

```
Edit .env file according to your database credentials.

DB_DATABASE=reverb_impersonate
DB_USERNAME=root
DB_PASSWORD=
```

5. Migrate database tables
```
php artisan migrate
```

6. Start development server
```
npm install
npm run dev
php artisan serve
```

7. Login other user
```
$user = User::find($id);
Auth::user()->impersonate($other_user);
// You're now logged as the $other_user
```

8. Login exit
```
Auth::user()->leaveImpersonation();
// You're now logged as your original user.
```


## Photos
![Spec Coder](https://i.postimg.cc/W38psqyF/laravel-impersonate1.png)
#
![Spec Coder](https://i.postimg.cc/vmzwnFtC/laravel-impersonate2.png)
