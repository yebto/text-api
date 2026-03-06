# YEB TextAPI

PHP SDK for the YEB Text API. Translate, rephrase, correct, summarize and explain text with AI.

Works standalone (plain PHP) or with Laravel (Facade + auto-discovery).

## Requirements

- PHP 8.1+
- cURL extension
- [YEB API Key](https://yeb.to) (free tier available)

## Installation

```bash
composer require yebto/text-api
```

## Standalone Usage

```php
use Yebto\TextAPI\TextAPI;

$api = new TextAPI(['key' => 'your-api-key']);
$result = $api->detectLanguage('example');
```

## Laravel Usage

Add your API key to `.env`:

```
YEB_KEY_ID=your-api-key
```

Use via Facade:

```php
use TextAPI;

$result = TextAPI::detectLanguage('example');
```

Or via dependency injection:

```php
use Yebto\TextAPI\TextAPI;

public function handle(TextAPI $api)
{
    $result = $api->detectLanguage('example');
}
```

### Publish Config

```bash
php artisan vendor:publish --tag=yebto-text-config
```

## Available Methods

| Method | Description |
|--------|-------------|
| `languages()` | List all supported languages |
| `detectLanguage($text)` | Detect the language of a text |
| `translate($text, $to)` | Translate text to a target language |
| `rephrase($text)` | Rephrase text with AI |
| `correct($text)` | Correct grammar and spelling |
| `summarize($text)` | Summarize text |
| `explain($text)` | Explain text in simple terms |
| `synonyms($text)` | Get synonyms for a word or phrase |


All methods accept an optional `$extra` array parameter for additional API options.

## Error Handling

```php
use Yebto\ApiClient\Exceptions\ApiException;
use Yebto\ApiClient\Exceptions\AuthenticationException;
use Yebto\ApiClient\Exceptions\RateLimitException;

try {
    $result = $api->detectLanguage('example');
} catch (AuthenticationException $e) {
    // Missing or invalid API key (401)
} catch (RateLimitException $e) {
    // Too many requests (429)
} catch (ApiException $e) {
    echo $e->getMessage();
    echo $e->getHttpCode();
}
```

## Free API Access

Register at [yeb.to](https://yeb.to) with Google OAuth to get a free API key.

## Support

- Documentation: [docs.yeb.to](https://docs.yeb.to)
- Email: support@yeb.to
- Issues: [GitHub Issues](https://github.com/yebto/text-api/issues)

## License

MIT - NETOX Ltd.
