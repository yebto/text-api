<?php

namespace Yebto\TextAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array languages(array $extra = [])
 * @method static array detectLanguage(string $text, array $extra = [])
 * @method static array translate(string $text, string $to, array $extra = [])
 * @method static array rephrase(string $text, array $extra = [])
 * @method static array correct(string $text, array $extra = [])
 * @method static array summarize(string $text, array $extra = [])
 * @method static array explain(string $text, array $extra = [])
 * @method static array synonyms(string $text, array $extra = [])
 */
class TextAPI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'yebto-text';
    }
}
