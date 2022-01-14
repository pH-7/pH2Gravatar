# pH2Gravatar

## 🖼 The simplest Gravatar PHP package

A lightweight, easy and elegant way to generate gravatar profile photos from email addresses 🪄

## ⛏ Requirements

- [PHP 7.3](https://www.php.net/releases/7_3_0.php), or higher! 🐘

## 🏗 How to install it?

With composer,

```bash
composer require ph-7/ph2gravatar
```

## 💭 How to use it?

### Example 1

```php
require __DIR__ . '/vendor/autoload.php';

use PH7\PH2Gravatar\Image;
?>

<!-- Here, we leave the default parameters. https://en.gravatar.com/site/implement/images/ -->
<!-- By default, the image size is 200px -->
<img src="<?= Image::get('me@test.email') ?>" alt="My gravatar image" />


<!-- Here, we set the gravatar image size to 400px -->
<img src="<?= Image::get('me@test.email', ['size' => 400]) ?>" alt="My gravatar image" />
```

### Example 2

```php
require __DIR__ . '/vendor/autoload.php';

use PH7\PH2Gravatar\Image as Gravatar;

// Show the gravatar image link
echo Gravatar::get('me@test.email', [
    'size' => 80,
    'rating' => 'pg',
    'display' => 'retro'
]);
// https://www.gravatar.com/avatar/9c47a7bb2aec6e61df372a8f8446ed9d?s=80&r=pg&d=retro
```

### Example 3

```php
require __DIR__ . '/vendor/autoload.php';

use PH7\PH2Gravatar\Image as GravatarImage;

$email = 'me@myemail.com';
$size = 400;

$imageUrl = GravatarImage::get($email, [
    'size' => $size,
    'display' => '404',
    'rating' => 'g'
    ]
);

// $imageUrl output
// https://www.gravatar.com/avatar/4995f3f0b59f4abfda86e74f92896f3b?s=400&r=g&d=404
```

## 🪄 Author

I'm **[Pierre-Henry Soria][author-url]**. A dedicated, passionate and positive software engineer 😊

You can keep in touch with me at _hi [[AT]] ph7 {{D0T}} me_ 📮

[![@phenrysay][twitter-image]][twitter-url] [![pH-7][github-image]][github-url]

[![Pierre-Henry Soria](https://gravatar.com/avatar/a210fe61253c43c869d71eaed0e90149?s=200)](https://ph7.me 'Pierre-Henry Soria, Software Developer')

## 📃 License

**pH2Gravatar** is distributed under MIT license 🚀 Enjoy!

<!-- GitHub's Markdown reference links -->

[author-url]: https://pierrehenry.be
[license-url]: https://opensource.org/licenses/MIT
[twitter-url]: https://twitter.com/phenrysay
[twitter-image]: https://img.shields.io/badge/Twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white
[github-url]: https://github.com/pH-7
[github-image]: https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white
