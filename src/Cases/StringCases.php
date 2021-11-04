<?php

namespace AbdellahRamadan\String\Cases;

class StringCases
{
    /**
     * @param string $text
     * @return string
     */
    public function camelToSnakeCase(string $text = null): string
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
}