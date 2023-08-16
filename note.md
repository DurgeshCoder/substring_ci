# Migrations

All about migration command

### Create Migration

```php
php spark migrate:create <name>
```

It will create new file under \Database\Migrations.

### Run the migration

```php
php spark migrate 
```

Above command create new table in database by using all the instruction given in migration class.

### Modify table using refresh

Modify the structure of the table in up() method of migration class then run cammand

```php
php spark migrate:refresh
```

This command recreate the table and delete all the data.

### Update the table without losing the data

To do this creates new migration

```php
php spark  migrate:create <updatename>
```

Create you change in up method
then run the migration