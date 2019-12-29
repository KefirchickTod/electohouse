<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## About Project

Практичне завдання

## Устоновка 
```
composer globar required laravel/laravel

composer create-project --prefer-dist laravel/laravel electohouse

http.conf >

<VirtualHost electohouse.local:80>
    ServerAdmin webmaster@m.asign.local
    DocumentRoot "g:/server/html/electohouse/public"
    ServerName electohouse.local
    ErrorLog "g:/server/html/electohouse/public/electohouse.local-error.log"
    CustomLog "logs/electohouse.local-access.log" common
    AddHandler fcgid-script .php
    FcgidInitialEnv PHPRC "g:/server/php72"
    <Directory "g:/server/html/electohouse/public">
        AllowOverride All
            order allow,deny
            allow from all
            deny from none
            Require all granted
        <Files ~ "\.php$">
            AddHandler fcgid-script .php
            FcgidWrapper "g:/server/php72/php-cgi.exe" .php
            Options +ExecCGI 
            order allow,deny 
            allow from all 
            deny from none 
            Require all granted
        </Files>
    </Directory>
</VirtualHost>

in file host add 

127.0.0.1   electohouse.local


in cmd 
composer update

```
Якщо буде 500 помилка тоді в cmd написати  на наступне
```
php artisan key:generate
```
##  БД

Встановлення бд
```
php artisan migrat
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
