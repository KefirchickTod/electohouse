<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## About Project

Практичне завдання

## Устоновка 
```
composer globar required laravel/laravel

http.conf >

<VirtualHost electohouse.local:1234>
    ServerAdmin webmaster@m.asign.local
    DocumentRoot "g:/server/html/electohouse/"
    ServerName electohouse
	ErrorLog "g:/server/html/electohouse/crm.bc-club.local-error.log"
    CustomLog "logs/electohouse.local-access.log" common
    AddHandler fcgid-script .php
    FcgidInitialEnv PHPRC "g:/server/php72"
    <Directory "g:/server/html/electohouse/">
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

```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
