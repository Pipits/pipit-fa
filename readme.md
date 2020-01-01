# Pipit Font Awesome

The Pipit Font Awesome app gives you the ability to add inline SVG icons from the popular [Font Awesome](https://fontawesome.com) icon library without any Javascript.

## Installation

### The app

* Download the latest version of the app.
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

Use the `pipit_fa_icon()` function to output an icon in PHP:

```php
pipit_fa_icon('fas fa-angle-down');
```


#### Parameters

```php
pipit_fa_icon($id, $opts, $return);
```

| Type       | Description                                                    |
|------------|----------------------------------------------------------------|
| String     | Icon ID e.g. `fas fa-angle-down`                               |
| Array      | Options array, see below                                       |
| Boolean    | Set to `true` to have the value returned instead of echoed.    |

#### Options array

| Option                | What it means   |
|-----------------------|--------------------------------------------------------------------------|
| class                 | Adds classes to the SVG tag |
| default_class         | If set to `false`, the default CSS class won't be added to the SVG tag. Deafult: `true`.  |
| title                 | Adds a `<title>` inside the SVG tag for semantic icons |
| title_id              | Adds an `id` attribute to `<title>` and adds `aria-labelledby` on the SVG tag with the same value |
| role                  | The value of the `role` attribute in the SVG tag. Default: `img` |
| fill                  | The value of the `fill` attribute in the `<path>` inside the SVG. Default: `currentColor` |
| aria-*                | You can add any aria-* attribute to the SVG tag e.g. `aria-label` |


#### Exampels:

```php
pipit_fa_icon('fas fa-angle-down');
```

With options:

```php
pipit_fa_icon('fas fa-angle-down', [
    'class' => 'my-custom-class another-class',
    'default_class' => false,
    'title' => 'My title',
    'role' => 'img',
    'fill' => '#ffffff',
]);
```

Return icon instead of echoing it:

```php
$icon = pipit_fa_icon('fas fa-angle-down', [], true);
```





### Perch Templates

Use the `perch:fa` namespace to render icons in a Perch template. The `id` and `icon` attributes are required.

```html
<perch:fa id="twitter" icon="fab fa-twitter" html>
```

| Attribute  | Description                                                    |
|------------|----------------------------------------------------------------|
| id         | An ID of your choosing. It can be anything, but it has to be unique. Use letters, numbers and underscores only  |
| icon       | Icon ID e.g. `fas fa-angle-down`                               |
| html       | Set to `true` to have the SVG tag output without encoding.     |


The options from the [option array](#options-array) can be added as attributes:

```html
<perch:fa id="twitter" icon="fab fa-twitter" html role="img" class="custom-class another-class" fill="red" title="Some title" title-id="some-id">
```

You can also add `aria-*` attributes:


```html
<perch:fa id="twitter" icon="fab fa-twitter" html aria-label="Some label">
```