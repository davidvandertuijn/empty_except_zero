# Empty Except Zero

<a href="https://packagist.org/packages/davidvandertuijn/empty_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/empty_except_zero/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/empty_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/empty_except_zero/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/empty_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/empty_except_zero/license.svg" alt="License"></a>

![Empty Except Zero](https://cdn.davidvandertuijn.nl/github/empty_except_zero.png)

The “Empty Except Zero” tool is designed to streamline data management by identifying and handling numerical values in datasets. This functionality is particularly useful in scenarios where it’s important to differentiate between zero values and truly empty or null entries.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/davidvandertuijn)

|                          | empty | empty_except_zero |
|--------------------------|-------|-------------------|
| "" (an empty string)     | TRUE  | TRUE              |
| 0 (0 as an integer)      | TRUE  | **FALSE**         |
| 0.0 (0 as a float)       | TRUE  | **FALSE**         |
| "0" (0 as a string)      | TRUE  | **FALSE**         |
| NULL                     | TRUE  | TRUE              |
| FALSE                    | TRUE  | TRUE              |
| array() (an empty array) | TRUE  | TRUE              |

## Install

```
composer require davidvandertuijn/empty_except_zero
```

## Usage

```php
empty_except_zero(0); // FALSE
```
