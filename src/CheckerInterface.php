<?php

namespace Src;

interface CheckerInterface
{
    public static function isAnagram(string $word, string $comparison) : bool;
    public static function isPalindrome(string $word) : bool;
    public static function isPangram($phrase) : bool;
}
