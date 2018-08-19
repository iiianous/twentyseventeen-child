# Wilmae
A twentyseventeen child theme

Wordpress Boilerplate for 2018

> gulp, scss, browsersync etc

fork from https://ahmadawais.com/my-advanced-gulp-workflow-for-wordpress-themes/

## assets_src
source files for scss, imgs.

It will be compiled to '/assets' folder 

## installation
go to themes directory
```
cd wp-content/themes
```

git clone <git-repo> 
```
git clone <git-path>
```

install the packages

cd to folder 

> twentyseventeen-child 
```javascript
npm install
```

serve the project
```javascript
gulp
```

## nginx configuration
in nginx, allow subpages routing

```javascript

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    # Remove trailing slash to please routing system.
    #if (!-d $request_filename) {
    # rewrite ^/(.+)/$ /$1 permanent;
    #}

```
