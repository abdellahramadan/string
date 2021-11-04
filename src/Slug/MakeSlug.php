<?php

namespace AbdellahRamadan\String\Slug;

class MakeSlug
{
    public function slug(string $text = null): string
    {
        $slugItem = explode(" ", $text);
        if (count($slugItem) > 0) {
            $sluggedText = '';

            foreach ($slugItem as $item) {
                $sluggedText .=  $item . '-';
            }

            $finalSlug = strtolower(substr_replace($sluggedText, "", -1));
            return $finalSlug;
        }
    }
}