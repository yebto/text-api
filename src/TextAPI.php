<?php

namespace Yebto\TextAPI;

use Yebto\ApiClient\YebtoClient;

class TextAPI extends YebtoClient
{
    protected function module(): string
    {
        return 'text';
    }

    protected function defaults(): array
    {
        return [
            'base_url' => 'https://api.yeb.to/v1',
            'key'      => null,
            'curl'     => [
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
                CURLOPT_USERAGENT      => 'yebto-text-api-php',
            ],
        ];
    }

    /**
     * List all supported languages
     */
    public function languages(array $extra = []): array
    {
        return $this->post('languages', $extra);
    }

    /**
     * Detect the language of a text
     */
    public function detectLanguage(string $text, array $extra = []): array
    {
        return $this->post('detect-language', array_merge(compact('text'), $extra));
    }

    /**
     * Translate text to a target language
     */
    public function translate(string $text, string $to, array $extra = []): array
    {
        return $this->post('translate', array_merge(compact('text', 'to'), $extra));
    }

    /**
     * Rephrase text with AI
     */
    public function rephrase(string $text, array $extra = []): array
    {
        return $this->post('rephrase', array_merge(compact('text'), $extra));
    }

    /**
     * Correct grammar and spelling
     */
    public function correct(string $text, array $extra = []): array
    {
        return $this->post('correct', array_merge(compact('text'), $extra));
    }

    /**
     * Summarize text
     */
    public function summarize(string $text, array $extra = []): array
    {
        return $this->post('summarize', array_merge(compact('text'), $extra));
    }

    /**
     * Explain text in simple terms
     */
    public function explain(string $text, array $extra = []): array
    {
        return $this->post('explain', array_merge(compact('text'), $extra));
    }

    /**
     * Get synonyms for a word or phrase
     */
    public function synonyms(string $text, array $extra = []): array
    {
        return $this->post('synonyms', array_merge(compact('text'), $extra));
    }
}
