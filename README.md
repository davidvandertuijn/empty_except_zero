# Empty Except Zero

<a href="https://packagist.org/packages/davidvandertuijn/empty_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/empty_except_zero/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/empty_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/empty_except_zero/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/empty_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/empty_except_zero/license.svg" alt="License"></a>

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
