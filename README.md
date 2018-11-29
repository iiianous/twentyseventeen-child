# Wilmae
A Wordpress child theme

Wordpress Custom Boilerplate for 2017 and 2018.

> Gulp, Browsersync, SASS files etc

## assets_src
Source files for JavaScript, SCSS and Image assets.

It will be compiled to '/assets' folder

## Installation
Go to `wp-content` > `themes` directory
```
cd wp-content/themes
```

git clone <git-repo> 
```
git clone <git-path>
```

Install the packages,
cd to folder 

> twentyseventeen-child 
```javascript
npm install
```

Serve the project
```javascript
gulp
```

## In Nginx configuration
in Nginx, allow subpages routing

```php

location / {
   try_files $uri $uri/ /index.php?$args;
}

# comment out this line if exist
# if (!-d $request_filename) {
#  rewrite ^/(.+)/$ /$1 permanent;
#}

```

Inspired from https://ahmadawais.com/my-advanced-gulp-workflow-for-wordpress-themes/
