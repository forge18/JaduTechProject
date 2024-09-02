<?php

namespace Src;

include_once 'CheckerInterface.php';

use Src\CheckerInterface;
use Src\Shared\Utility;

class Checker implements CheckerInterface {
    
    /**
     * Checks that the parameter $word and returns true if it is an anagram of the parameter $comparison.
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public static function isAnagram(string $word, string $comparison) : bool {
        $wordWoSpaces = str_replace(' ','', $word);
        $comparisonWoSpaces = str_replace(' ','', $comparison);
        $sortedWord = Utility::sortCharacters($wordWoSpaces);
        $sortedComparison = Utility::sortCharacters($comparisonWoSpaces);
        if (is_null($sortedWord) || is_null($sortedComparison)) {
            return false;
        }
        return $sortedWord == $sortedComparison;
    }

    /**
     * Checks the parameter $word and returns true if it is a palindrome.
     * @param string $word
     * @return bool
     */
    public static function isPalindrome(string $word) : bool {
        return $word == strrev($word);
    }

    /**
     * Checks the parameter $phrase and returns true if it contains at least one instance of every letter 
     * in the English alphabet.
     * @param mixed $phrase
     * @return bool
     */
    public static function isPangram($phrase) : bool {
        $lowercasePhrase = strtolower($phrase);
        $cleanPhrase = preg_replace("/[^a-zA-Z\s]/", "", $lowercasePhrase);
        $spacesBetweenCharacters = implode(' ', str_split($cleanPhrase));
        $explodedPhrase = explode(" ", $spacesBetweenCharacters);
        $uniqueCharacters = array_unique($explodedPhrase);
        return count($uniqueCharacters) == 27;
    }
 
}