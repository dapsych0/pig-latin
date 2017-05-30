<?php
/**
 * Pig Latin translator class
 * Based off: https://en.wikipedia.org/wiki/Pig_Latin
 */
namespace dapsych0\piglatin;

class PigLatin {
    /** @var array Consonants */
    private $consonant = array(
        'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'
    );

    /** @var array Vowels */
    private $vowels = array(
        'a', 'e', 'i', 'o', 'u'
    );

    /**
     * @param string $string
     * @return string
     */
    public function translate($string) {
        $pigLatinWords = [];
        $wordsArray = explode(' ', $string);

        foreach($wordsArray as $word) {
            $pigLatinWords[] = $this->translateWord(strtolower($word));
        }

        return implode(' ', $pigLatinWords);
    }

    /**
     * @param string $word
     * @return string
     */
    public function translateWord($word)
    {
        $pigLatinWord = '';

        if(in_array(substr($word, 0, 1), $this->vowels)) {
            return $word.'-way';
        }
        if(in_array(substr($word, 0, 1), $this->consonant)) {
            preg_match('/^[^aeiou]+/i', $word, $matches); // Get the consonant cluster
            $beginning = $matches[0];
            $pigLatinWord = substr($word, strlen($beginning)).'-'.$beginning.'ay';
        }

        return $pigLatinWord;
    }
}