# String_Function.php

## Description

`String_Function.php` is a PHP script that provides a collection of useful functions for manipulating and working with strings. It includes various functions to perform common string operations, such as string concatenation, trimming, searching, replacing, and more.

## Functions

1. `string_concat($str1, $str2)`: This function takes two strings as input and returns their concatenation. It joins `$str1` and `$str2` to form a new string.

2. `string_length($str)`: Returns the length of the input string `$str`.

3. `string_trim($str)`: Removes leading and trailing whitespaces from the input string `$str`.

4. `string_to_lowercase($str)`: Converts all characters in the input string `$str` to lowercase.

5. `string_to_uppercase($str)`: Converts all characters in the input string `$str` to uppercase.

6. `string_search($str, $search)`: Searches for the first occurrence of `$search` in the input string `$str` and returns the position if found. Otherwise, it returns false.

7. `string_replace($str, $search, $replace)`: Replaces all occurrences of `$search` in the input string `$str` with `$replace` and returns the modified string.

## How to Use

1. Ensure you have PHP installed on your system.
2. Include the `String_Function.php` script in your PHP file where you want to use the string functions.

```php
include 'String_Function.php';
```

3. Call the desired string functions as per your requirements.

```php
// Example usage
$str1 = "Hello";
$str2 = "World";
$result = string_concat($str1, $str2);
echo $result; // Output: "HelloWorld"

$inputStr = "   This is a sample string.   ";
$trimmedStr = string_trim($inputStr);
echo $trimmedStr; // Output: "This is a sample string."

$searchStr = "sample";
$replacementStr = "example";
$newStr = string_replace($inputStr, $searchStr, $replacementStr);
echo $newStr; // Output: "   This is a example string.   "
```

## Contribution

If you find any issues with the functions or have ideas for improvement, feel free to contribute by submitting bug reports or creating pull requests on the GitHub repository.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
