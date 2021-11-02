<?php


class MakeSlug
{
    public function slug(string $text): string
    {
        $slug = explode(" ", $text);
        if (count($slug) !== 0) {
            $sluggedText = ' ';

            foreach ($slug as $item) {
                $sluggedText . '-';
            }

            return $sluggedText;
        }
    }
}