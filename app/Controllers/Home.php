<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(?string $locale = null)
    {
        $locale = $this->resolveLocale($locale);
        $translations = $this->loadTranslations($locale);

        return view('public/home', [
            'langCode' => $locale,
            't' => $translations,
            'metaTitle' => $translations['meta']['title'],
            'metaDescription' => $translations['meta']['description'],
        ]);
    }

    private function resolveLocale(?string $locale): string
    {
        $allowed = ['en', 'id'];
        $requested = $locale
            ?: $this->request->getGet('lang')
            ?: session()->get('site_lang')
            ?: 'en';

        $requested = strtolower((string) $requested);
        if (! in_array($requested, $allowed, true)) {
            $requested = 'en';
        }

        session()->set('site_lang', $requested);
        service('language')->setLocale($requested);

        return $requested;
    }

    private function loadTranslations(string $locale): array
    {
        $file = APPPATH . 'Language/' . $locale . '/Site.php';
        if (! is_file($file)) {
            $file = APPPATH . 'Language/en/Site.php';
        }

        return require $file;
    }
}
