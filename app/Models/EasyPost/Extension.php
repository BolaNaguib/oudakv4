<?php

namespace App;

class Extension
{
    // From Object.php
    public static function constructFrom($values, $class = null, $apiKey = null, $parent = null, $name = null)
    {
        if ($class === null) {
            $class = get_class();
        }

        $obj = new $class(isset($values['id']) ? $values['id'] : null, $apiKey, $parent, $name);
        $obj->refreshFrom($values, $apiKey);

        return $obj;
    }
}
