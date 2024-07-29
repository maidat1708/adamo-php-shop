<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class Helper
{
    // function array_search_wrapper($needle, $haystack, $strict = false, callable $modifier = null)
    // {
    //     if ($modifier) {
    //         Log::info($needle);
    //         $needle = $modifier($needle);
    //         $haystack = array_map(function ($item) use ($modifier){
    //             // Log::info($item);
    //             return $modifier($item);
    //         }, $haystack);
    //     }
    //     return array_search($needle, $haystack, $strict);
    // }
    public static function log($content)
    {
        Log::info($content);
    }
    public function find_needle_in_haystack(array $needle, array $haystacks)
    {
        // Convert needle to lowercase
        $needle_lowercase = helper()->array_values_to_lowercase($needle);

        // Loop through haystacks to find a match
        foreach ($haystacks as $haystack) {
            // Convert haystack to lowercase for comparison
            if ($haystack == null)
                continue;
            $haystack_lowercase = helper()->array_values_to_lowercase($haystack);

            // Compare haystack with needle
            if ($haystack_lowercase === $needle_lowercase) {
                return $haystack; // Found a match
            }
        }

        return null; // No match found
    }

    public function array_values_to_lowercase(array $array)
    {
        return array_map(function ($value) {
            if ($value == null)
                return null;
            if (is_array($value)) {
                return $this->array_values_to_lowercase($value); // Recursively process nested arrays
            } elseif (is_string($value)) {
                return strtolower($value); // Convert string value to lowercase
            } else {
                return $value; // Return unchanged for non-string values
            }
        }, $array);
    }
    function modifyArrayForDuplicateCheck($array)
    {
        // Create a new array with modified values for duplicate check
        $modifiedArray = [];

        foreach ($array as $item) {
            $modifiedItem = $item!=null?[
                'name' => strtolower($item['name']),
                'artists' => array_map('strtolower', $item['artists'])
            ]:null;
            $modifiedArray[] = $modifiedItem;
        }

        return $modifiedArray;
    }

    function findDuplicates($array)
    {
        // Create an associative array to count occurrences
        $countedValues = [];

        foreach ($array as $item) {
            if($item == null) continue;
            $key = $item['name'] . ':' . implode(',', $item['artists']);
            if (isset($countedValues[$key])) {
                $countedValues[$key]++;
            } else {
                $countedValues[$key] = 1;
            }
        }

        // Filter out values that appear more than once
        $duplicates = array_filter($countedValues, function ($count) {
            return $count > 1;
        });

        // Return the keys (original values) of the filtered array
        return array_keys($duplicates);
    }
    public static function formatDate($date, $format = 'Y-m-d')
    {
        return \Carbon\Carbon::parse($date)->format($format);
    }

    public static function titleCase($string)
    {
        return ucwords(strtolower($string));
    }
    public static function toUppercase($string)
    {
        return strtoupper($string);
    }
    public static function toLowercase($string)
    {
        return strtolower($string);
    }

    // Instance method to generate a greeting message
    public function greeting($name)
    {
        return "Hello, $name!";
    }

    function maskEmail($inputString, $prefixLength = 3, $suffixLength = 2)
    {
        // Separate the string into STRING and ADDRESS parts
        $parts = explode('@', $inputString);

        if (count($parts) !== 2) {
            // Handle invalid format if needed
            return $inputString;
        }

        $stringPart = $parts[0]; // STRING part
        $addressPart = $parts[1]; // ADDRESS part

        // Check if username is too short to effectively mask
        if (strlen($stringPart) < 5) {
            // If too short, mask the entire username with asterisks
            $maskedStringPart = str_repeat('*', strlen($stringPart));
            $prefix = '';
            $suffix = '';
        } else {
            // Ensure prefix and suffix lengths are within bounds
            $prefixLength = max(0, min(strlen($stringPart), $prefixLength));
            $suffixLength = max(0, min(strlen($stringPart), $suffixLength));

            // Extract prefix and suffix from STRING part
            $prefix = substr($stringPart, 0, $prefixLength);
            $suffix = substr($stringPart, -$suffixLength);

            // Mask the middle part of STRING with asterisks
            $maskedStringLength = max(0, strlen($stringPart) - $prefixLength - $suffixLength);
            $maskedStringPart = str_repeat('*', $maskedStringLength);
        }

        // Combine masked STRING with ADDRESS and return
        return $prefix . $maskedStringPart . $suffix . '@' . $addressPart;
    }


    public static function generateRandomString($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charLength - 1)];
        }

        return $randomString;
    }

    public function print($str)
    {
        echo "$str<br>";
    }

    // Instance method for method chaining
    public function addPrefix($string, $prefix)
    {
        $this->string = $prefix . $string;
        return $this;
    }

    // Method to retrieve the string after chaining operations
    public function getString()
    {
        return $this->string;
    }

    protected $string;
}