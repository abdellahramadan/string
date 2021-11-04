<?php
namespace App\String;

class Strings
{
    /**
     * @param string|null $text
     * @return string
     */
    public static function slug(string $text = null): string
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

    /**
     * @param string|null $text
     * @return string
     */
    public static function lowercase(string $text = null): string
    {
        return strtolower($text);
    }

    /**
     * @param string|null $text
     * @return string
     */
    public static function uppercase(string $text = null): string
    {
        return strtoupper($text);
    }

    /**
     * @param string|null $text
     * @return string
     */
    public static function camelToSnakeCase(string $text = null): string
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
     * @param string|null $text
     * @return string
     */
    public static function uppercaseFirst(string $text = null): string
    {
        return ucfirst($text);
    }

    public static function lowercaseFirst(string $text = null): string
    {
        return lcfirst($text);
    }

    public static function capitalize(string $text = null): string
    {
        $words = explode(" ", $text);
        $arrayOfWords = array();
        foreach ($words as $word) {
            array_push($arrayOfWords, ucfirst($word));
        }

        $result = implode(" ", $arrayOfWords);

        return $result;
    }
}