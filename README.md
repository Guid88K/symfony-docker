# Symfony 5.4 Skeleton Application

**ONLY for DEV, not for production!**

### Docker + PHP 8.0 + MySQL 8 + Nginx + Symfony 5.4 + Bootstrap 5 + Adminer

Add to `/etc/hosts` file lines 
```
127.0.0.1 symfony5-skeleton.test
127.0.0.1 adminer.test
```

See hostnames in the `.env` file.

## Install
```
git clone https://github.com/amberlex78/symfony5-skeleton
cd symfony5-skeleton
cp project/.env project/.env.local
make init
make seed
```

### Database

See database connection parameters in the `.env` file.

Database connection in the `project/.env.local` file.
```
DATABASE_URL="mysql://symfony:symfony@mysql:3306/symfony?serverVersion=8.0"
```

## Docker

### Up

Docker up `docker-compose up -d` or:
```
make init
```

### Down

Docker down `docker-compose down --remove-orphans` or:
```
make down
```

See all command in `Makefile` file.

## Access to site

Front:
```
http://symfony5-skeleton.test
```
