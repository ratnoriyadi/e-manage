<?php

class LanguageTest extends TestCase
{
    /**
     * Test change language
     *
     * @return void
     */
    public function testChangeLanguage()
    {
        $this->visit('/language/fr')
            ->see('Un framework PHP novateur')
            ->visit('/language/id')
            ->see('Sebuah PHP Framework yang fantastik')
            ->visit('/language/en')
            ->see('An awesome PHP framework')
            ->visit('/language/pt-BR')
            ->see('Um fantástico framework PHP')
            ->click('fr')
            ->see('Un framework PHP novateur')
            ->click('en')
            ->see('An awesome PHP framework')
            ->click('pt-BR')
            ->see('Um fantástico framework PHP');
    }
}
