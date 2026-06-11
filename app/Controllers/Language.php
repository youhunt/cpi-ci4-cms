<?php

namespace App\Controllers;

class Language extends BaseController
{
    public function switch(string $locale = 'en')
    {
        $locale = strtolower($locale);
        if (! in_array($locale, ['en', 'id'], true)) {
            $locale = 'en';
        }

        session()->set('site_lang', $locale);

        $redirectTo = $this->request->getGet('redirect') ?: site_url($locale);

        return redirect()->to($redirectTo);
    }
}
