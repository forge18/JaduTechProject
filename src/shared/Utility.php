<?php

namespace Src\Shared;

class Utility {

    /**
     * Takes a word and sorts the characters into alphabetical order.
     * @param string $word Should only contain alphabetic characters.
     * @return string
     */
    public static function sortCharacters(string $word) : string {
        $containsOnlyAlpha = preg_match("/^[A-Za-z]*$/", $word);
        if (!$containsOnlyAlpha) {
            return '';
        }
        $splitWord = str_split($word);
        sort($splitWord);
        return implode('', $splitWord);
    }

}