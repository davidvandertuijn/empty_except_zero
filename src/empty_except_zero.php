<?php

/**
 * Empty Except Zero.
 *
 * @return bool
 */
function empty_except_zero($var) : bool
{
    if ((is_string($var) && trim($var) == '')
    || is_null($var)
    || $var === false
    || is_array($var) && count($var) == 0) {
        return true;
    }

    return false;
}
