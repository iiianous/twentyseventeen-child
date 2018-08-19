# Wilmae
A twentyseventeen child theme

Wordpress Boilerplate for 2017 and 2018

> Gulp,Browsersync, scss etc

## assets_src
Source files for scss, js and images.

It will be compiled to '/assets' folder

## Installation
Go to themes directory
```
cd wp-content/themes
```

git clone <git-repo> 
```
git clone <git-path>
```

Install the packages
cd to folder 

> twentyseventeen-child 
```javascript
npm install
```

Serve the project
```javascript
gulp
```

## In nginx configuration
in nginx, allow subpages routing

```php

location / {
   try_files $uri $uri/ /index.php?$args;
}

# comment out this line if exist
# if (!-d $request_filename) {
#  rewrite ^/(.+)/$ /$1 permanent;
#}

```

Fork and inspired from https://ahmadawais.com/my-advanced-gulp-workflow-for-wordpress-themes/
