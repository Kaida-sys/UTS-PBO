
# CATATAN UNTUK MULAI DARI BUKA TERMINAL
```php
cd /root
mkdir perkuliahan //lakukan ke cd jika foldernya sudah ada
cd perkuliahan
git clone git@github.com:djambred/pbo-new.git //jika sudah dilakukan bisa di skip step ini
cd pbo-new
code .
cd pert2
docker compose up -d --build
```

# BUILD DOCKER
```php
docker compose up -d --build
```

# DOWN DOCKER
```php
docker compose down
```

# EKSEKUSI DOCKER
```php
docker exec -it pbo bash
```

# DIDALAM CONTAINER 
```php
composer create-project --prefer-dist raugadh/fila-starter .
php artisan storage:link
chown -R www-data:www-data storage/*
chown -R www-data:www-data bootstrap/*
```

# DIDALAM VSCODE FOLDER SRC CARI FILE .env
```php
//line 5
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost

//line 28
DB_CONNECTION=mariadb
DB_HOST=dbpbo
DB_PORT=3306
DB_DATABASE=db_pbo
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```

# BALIK KEDALAM CONTAINER (Terminal)
```php
php artisan migrate
php artisan project:init
```

# BUKA BROWSER
```php
http://localhost/admin
username : admin@admin.com
password : password
```
