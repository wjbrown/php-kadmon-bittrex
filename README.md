# php-kadmon-slim

Simple starting point for a slim project.

### Overview
This project is setup to more or less mirror a traditional php MVC framework, albeit "lightly".  

##### Routes/Controllers
Controller actions are defined directly as Routes `src/Routes`.  I've included a sample api.php if you need to make a dead-simple api endpoint, and I've also included a sample pages.php.  Notice that when you render a page, you need to pass the layout, the template and any data that you want to pass along.

##### Views
Views are broken into a simple Layout/Page/Element structure.  They are located in `src/Views`.  Layouts wrap a single page and 0 or more elements.  Pages wrap 0 or more elements.

### To Install

```bash
# clone the repo
git clone git@github.com:wjbrown/php-kadmon-slim.git;
cd php-kadmon-slim;

# install composer dependencies
composer install;
```
Then just point your domain's webroot to `/public`, or
```bash
cd public;
php -S localhost:8080
```
####
