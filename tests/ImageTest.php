<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\PH2Gravatar\Tests;

use PH7\PH2Gravatar\Image;
use PHPUnit\Framework\TestCase;

final class ImageTest extends TestCase
{
    private const TEST_EMAIL = 'test@ph7.me';
    private const TEST_EMAIL_HASH = '25b846cb8825d0854bd7a24792f8945a';

    public function testGravatarWithoutOptions(): void
    {
        $actual = Image::get(self::TEST_EMAIL);
        $expected = 'https://www.gravatar.com/avatar/' . self::TEST_EMAIL_HASH . '?s=200&r=g&d=mp';

        $this->assertSame($expected, $actual);
    }

    public function testGravatarWithOptions(): void
    {
        $upperCaseEmail = strtoupper(self::TEST_EMAIL);
        $actual = Image::get($upperCaseEmail, [
            'size' => 400,
            'rating' => 'pg',
            'display' => 'retro'
        ]);
        $expected = 'https://www.gravatar.com/avatar/' . self::TEST_EMAIL_HASH . '?s=400&r=pg&d=retro';

        $this->assertSame($expected, $actual);
    }

    public function testGravatarWithUppercaseEmail(): void
    {
        $upperCaseEmail = strtoupper(self::TEST_EMAIL);
        $actual = Image::get($upperCaseEmail);
        $expected = 'https://www.gravatar.com/avatar/' . self::TEST_EMAIL_HASH . '?s=200&r=g&d=mp';

        $this->assertSame($expected, $actual);
    }

    public function testGravatarWithSpacesInEmail(): void
    {
        $extraSpacesInEmail = ' ' . self::TEST_EMAIL . ' ';
        $actual = Image::get($extraSpacesInEmail);
        $expected = 'https://www.gravatar.com/avatar/' . self::TEST_EMAIL_HASH . '?s=200&r=g&d=mp';

        $this->assertSame($expected, $actual);
    }
}
