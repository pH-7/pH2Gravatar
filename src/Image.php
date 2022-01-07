<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021-2022, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\PH2Gravatar;

final class Image
{
    private const DEFAULT_SIZE = 200;
    private const DEFAULT_RATING = 'g';
    private const DEFAULT_DISPLAY = 'mp';
    private const GRAVATAR_URL = 'https://www.gravatar.com';

    public static function get(string $email, array $options = []): string
    {
        $url = self::GRAVATAR_URL . '/avatar/' . self::getEmailHash($email);

        return self::buildUrl($url, self::buildOptions($options));
    }

    private static function getEmailHash(string $email): string
    {
        return md5(self::sanitize($email));
    }

    private static function buildUrl(string $url, string $params): string
    {
        return $url . '?' . $params;
    }

    private static function sanitize(string $value): string
    {
        return strtolower(trim($value));
    }

    private static function buildOptions(array $options): string
    {
        $params = [
            's' => !empty($options['size']) ? $options['size'] : self::DEFAULT_SIZE,
            'r' => !empty($options['rating']) ? $options['rating'] : self::DEFAULT_RATING,
            'd' => !empty($options['display']) ? $options['display'] : self::DEFAULT_DISPLAY,
        ];

        return http_build_query($params);
    }
}
