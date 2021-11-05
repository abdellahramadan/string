<?php
declare(strict_types = 1);

namespace AbdellahRamadan\String;

class Strings
{
    /**
     * @param string $text
     * @return string
     */
    public static function slug(string $text): string
    {
        $slugItem = explode(" ", $text);
        $finalSlug = '';
        if (count($slugItem) > 0) {
            $sluggedText = '';

            foreach ($slugItem as $item) {
                $sluggedText .=  $item . '-';
            }

            $finalSlug = strtolower(substr_replace($sluggedText, "", -1));

        }
        return $finalSlug;
    }

    /**
     * @param string $text
     * @return string
     */
    public static function lowercase(string $text): string
    {
        return strtolower($text);
    }

    /**
     * @param string $text
     * @return string
     */
    public static function uppercase(string $text): string
    {
        return strtoupper($text);
    }

    /**
     * @param string $text
     * @return string
     */
    public static function camelToSnakeCase(string $text): string
    {
        $chars = str_split($text);

        $characters = '';

        if ( $chars[0]) {
            $characters .= strtolower($chars[0]);
        }

        unset($chars[0]);
        foreach ($chars as $char) {
            if (ctype_upper($char)) {
                $characters .=  strtolower($char);
            } else {
                $characters .= strtolower($char);
            }
        }

        $arrayOfTexts = explode(" ", $characters);

        $finalString = '';

        foreach ($arrayOfTexts as $item) {
            $finalString .= '_' . $item;
        }

        $finalString = ltrim($finalString, '\_');
        return $finalString;
    }

    /**
     * @param string $text
     * @return string
     */
    public static function uppercaseFirst(string $text): string
    {
        return ucfirst($text);
    }

    public static function lowercaseFirst(string $text): string
    {
        return lcfirst($text);
    }

    /**
     * @param string $text
     * @return string
     */
    public static function capitalize(string $text): string
    {
        $words = explode(" ", $text);
        $arrayOfWords = array();
        foreach ($words as $word) {
            array_push($arrayOfWords, ucfirst($word));
        }

        $result = implode(" ", $arrayOfWords);

        return $result;
    }

    /**
     * @param string $haystack
     * @param string $word
     * @return bool
     */
    public static function contains(string $haystack, string $word): bool
    {
        if (str_contains($haystack, $word)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $haystack
     * @param string $prefix
     * @return string
     */
    public static function prefix(string $sentence, string $prefix): string
    {
        $originalString = explode(" ", $sentence);
        $newString = explode(" ", $prefix);
        $finalString = implode(" ", array_merge($newString, $originalString));

        return $finalString;
    }

    /**
     * @param string $sentence
     * @param string $suffix
     * @return string
     */
    public static function suffix(string $sentence, string $suffix): string
    {
        $originalString = explode(" ", $sentence);
        $newString = explode(" ", $suffix);
        $finalString = implode(" ", array_merge($originalString, $newString));

        return $finalString;
    }
}