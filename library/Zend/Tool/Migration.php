<?php

/**
 * @author Voycer Development <dev@voycer.com>
 */
class Zend_Tool_Migration
{
    /**
     * @param $arg
     * @return array
     */
    public static function forCount($arg) {
        if (is_array($arg) || $arg instanceof Countable || $arg instanceof SimpleXMLElement) {
            return $arg;
        }

        if ($arg === null) {
            return [];
        }

        return [$arg];
    }
}
