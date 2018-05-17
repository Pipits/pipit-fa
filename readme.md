# Pipit Font Awesome

The Pipit Font Awesome app gives you the ability to add inline SVG icons from the popular [Font Awesome](https://fontawesome.com) icon library without any Javascript.

## Installation

### The app

* Download the latest version of the Catalog App.
* Unzip the download
* Place the `pipit_fa` folder in `perch/addons/apps`
* Add `pipit_fa` to your app list in `perch/config/apps.php`

### Font Awesome

* Download Font Awesome (Free or Pro)
* Get the folder `advanced-options/raw-svg` and place it in your project. Feel free to rename it.
* Add `svg-with-js/css/fa-svg-with-js.css` to your document (or write your own CSS)



## Requirements

* Perch or Perch Runway 3.0 or higher



## Configuration

In your `perch/config/config.php` add the path of the `advanced-options/raw-svg` folder.

If you added the folder to `/assets` in your root directory, you would define the path like so:

```php
define('PIPIT_FA_SVG_DIR', dirname(PERCH_PATH).'/assets/raw-svg');
```


## Usage

### PHP

```php
pipit_fa_icon('fal fa-angle-down');
```

With options:

```php
pipit_fa_icon('fal fa-angle-down', [
    'class' => 'my-custom-class another-class',
    'default_class' => false,
    'title' => 'My title',
    'role' => 'img',
    'fill' => '#ffffff',
]);
```

Return icon instead of echoing it:

```php
pipit_fa_icon('fal fa-angle-down', [], true);
```


### Perch Templates

Besides the `icon` attribute, an `id` and the `html` attribute are also required.

```markup
<perch:fa id="twitter" icon="fab fa-twitter" html>
```

Additional options can be added as attributes:

```markup
<perch:fa id="twitter" icon="fab fa-twitter" html role="img" class="custom-class another-class" fill="red">
```