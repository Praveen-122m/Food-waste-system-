# PHP Installation and Configuration Guide

## Install PHP
1. Download and install XAMPP from the official website: [XAMPP Download](https://www.apachefriends.org/index.html).
2. Follow the installation instructions provided on the website.

## Get PHP Path
After installing XAMPP, the PHP executable is typically located in the following directory:
```
C:\xampp\php\php.exe
```

## Configure PHP Path
To configure the PHP path in your project, you can update your configuration file (e.g., `fiveserver.config.js`) as follows:
```javascript
module.exports = {
  php: "C:\\xampp\\php\\php.exe"   // Windows
}
```

## Verify Installation
To verify that PHP is installed correctly, open a command prompt and enter:
```
php -v
```
This should display the PHP version if installed correctly.
