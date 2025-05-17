##### masuk ke dalam folder perkuliahan pbo masing-masing didalam terminal ketikkan 
```php
mkdir uts
```
```php
cd uts
``` 
##### (/root/perkuliahan/pbo/pert2/ sesuaikan dengan posisi folder perkuliahan pbo masing-masing untuk melihat posisi direktorinya ketikkan pwd)
```php
cp -R /root/perkuliahan/pbo/pert2/nginx .
```
```php
cp -R /root/perkuliahan/pbo/pert2/db .
```
```php
cp -R /root/perkuliahan/pbo/pert2/php .
```
```php
cp -R /root/perkuliahan/pbo/pert2/.env .
```
```php
cp -R /root/perkuliahan/pbo/pert2/docker-compose.yml .
```
```php
cd db && rm -rf data && cd ..
```
```php
code .
```
##### balik ke terminal (dalam folder uts)
```php
docker compose up -d --build
```
```php
docker exec -it uts_pbo bash
```
```php
composer create-project --prefer-dist raugadh/fila-starter .
```
```php
exit
```
```php
cd src && code .
```
```php
docker exec -it uts_pbo bash
```
##### di file .env (folder src) rubah line 1, 5, 6, 7, 29, 31, 33
```php
//line 1
APP_NAME="UTS PBO"
//line 5
APP_TIMEZONE='Asia/Jakarta'
//line 6 & 7
APP_URL=http://localhost
ASSET_URL=http://localhost
//line 29
DB_HOST=db_uts_pbo
//line 31
DB_DATABASE=uts_pbo
//line 33
DB_PASSWORD=p455w0rd
```
##### masih didalam container docker via terminal (docker exec -it uts_pbo bash)
```php
php artisan migrate
```
```php
php artisan project:init
```
##### buka browser anda 
```php
http://localhost/admin
```
##### user login
```php
admin@admin.com
```
##### passwordnya
```php
password
```