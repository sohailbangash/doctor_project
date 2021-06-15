Mango Starterkit
================
Gulp based starterkit for sass, scss & js code with Bootstrap 4.3.1. The starterkit compiles, uglify, rename sass code with sourcemapping. It concate, lint, uglify & renames js code with sourcemapping. For debugging the watch task has been set to notify on erros.
    
Installation
-------------
Clone into your project repository & run following

    npm i 
    gulp
    
Configuration
-------------
See _gulpfile.js_ line 21-43. Set the styles and scripts paths as your like.
See line 75 if you want to change Javascript filename.

Pakages List
------------
Below are the npm packages used along with versions

    "@babel/core": "^7.5.5",
    "@babel/preset-env": "^7.5.5",
    "browser-sync": "^2.26.7",
    "gulp": "^4.0.2",
    "gulp-autoprefixer": "^6.1.0",
    "gulp-babel": "^8.0.0",
    "gulp-concat": "^2.6.1",
    "gulp-eslint": "^6.0.0",
    "gulp-modernizr": "^3.3.0",
    "gulp-notify": "^3.2.0",
    "gulp-plumber": "^1.2.1",
    "gulp-rename": "^1.4.0",
    "gulp-sass": "^4.0.2",
    "gulp-sourcemaps": "^2.6.5",
    "gulp-uglify-es": "^1.0.4",
    "gulp-uglifycss": "^1.1.0",
    "gulp-util": "^3.0.8",
    "node-sass": "^4.12.0"

    "bootstrap": "^4.3.1",
    "popper.js": "^1.14.3"
