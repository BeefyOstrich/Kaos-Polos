## Installation

``` bash
# clone the repo
$ git clone https://gitlab.com/sakanario/kaos-polos.git my-project

# go into app's directory
$ cd my-project

# install app's dependencies
$ composer install

# install app's dependencies
$ npm install

```

### Setup Database MySQL
In file ".env" complete this database configuration:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=kaos_polos
* DB_USERNAME=root
* DB_PASSWORD=

### Set APP_URL

> If your project url looks like: example.com/sub-folder 
Then go to `my-project/.env`
And modify this line:

* APP_URL = 

To make it look like this:

* APP_URL = http://example.com/sub-folder


### Next step

``` bash
# in your app directory
# generate laravel APP_KEY
$ php artisan key:generate

# run database migration and seed
$ php artisan migrate:refresh --seed

# generate mixing
$ npm run dev

# and repeat generate mixing
$ npm run dev
```

## Usage

``` bash
# start local server
$ php artisan serve

# test
$ php vendor/bin/phpunit
```

Open your browser with address: [localhost:8000](localhost:8000)  
Click "Login" on sidebar menu and log in with credentials:

* E-mail: _admin@admin.com_
* Password: _password_

This user has roles: _user_ and _admin_

admin page : http://localhost:8000/daftar-pesanan

--- 

## Features

#### Users
It is a simple example of how to manage registered users.

#### Menu management 
It is a system that allows you to create a new menu and edit existing menus. To place a new menu named "new" in any view use this code:
```php
        <?php
            use the App\MenuBuilder\FreelyPositionedMenus;
            if(isset($appMenus['new'])){
                FreelyPositionedMenus::render( $appMenus['new'] , '', 'your-css-class-of-ul-element');
            }
        ?>  
```
#### Manage menu items
Allows you to add, edit and delete menu items.
To add a new menu item to the menu you must:
* specify to which menu you are adding the item,
* specify the roles of users for whom the item will be visible
* name the item
* type ( to choice: link, title and dropdown)
* Href, the address to which the item is to refer,
* Parent (To nest the item inside dropdown)
* CORUI icons

#### Role management
Allows you to create, edit, delete and reorder user roles.
When a user has more than one role, the highest hierarchical role is used to create a menu for him.

#### Manage media
It allows to:
* Create virtual media folders.
* Send media to applications.
* Move media between folders,
* Cut images,
