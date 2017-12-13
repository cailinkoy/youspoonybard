<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $wordbackw = strrev($word);
        if (strcasecmp($word, $wordbackw) === 0) {
            echo "true";
        } else {
            echo "false";
        }
    }
}

echo Palindrome::isPalindrome($word);
?>
