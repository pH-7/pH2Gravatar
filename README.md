# pH2Gravatar

## The simplest Gravatar PHP package

An easy and elegant way to generate gravatar profile photos from email addresses 🪄

## ⛏ Requirements

* [PHP 7.1](https://www.php.net/releases/7_1_0.php) or higher.


## 🏗 How to install it?

With composer,
```bash
composer require ph-7/ph2gravatar
```


## 💭 How to use it?

```php
require __DIR__ . '/vendor/autoload.php';

use Ph7\PH2Gravatar\Gravatar\Image;
?>

<!-- Here, we leave the default parameters. https://en.gravatar.com/site/implement/images/ -->
<img src="<?php echo Image::get('me@test.email'); ?>" alt="My gravatar image" />


<!-- Set gravatar image size to 400px -->
<img src="<?php echo Image::get('me@test.email', ['size' => 400]); ?>" alt="My gravatar image" />
```

```php
require __DIR__ . '/vendor/autoload.php';

use Ph7\PH2Gravatar\Gravatar;

echo Gravatar::get('me@test.email', [
    'size' => 80,
    'rating' => 'pg',
    'display' => 'retro'
]);
```

## 🪄 Author

I'm **[Pierre-Henry Soria][author-url]**. A passionate,  zen &amp; dedicated software engineer 😊

[![@phenrysay][twitter-image]][twitter-url] [![pH-7][github-image]][github-url]

## 📃 License

pH2Gravatar is distributed under MIT license 🚀 Enjoy!

<!-- GitHub's Markdown reference links -->
[author-url]: https://pierrehenry.be
[license-url]: https://opensource.org/licenses/MIT
[twitter-url]: https://twitter.com/phenrysay
[twitter-image]: https://img.shields.io/badge/Twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white
[github-url]: https://github.com/pH-7
[github-image]: https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white
