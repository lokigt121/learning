<?php
class ConfReader
{
    public function getValues(array $default = null)
    {
        $values = [];
        $values = array_merge($default, $values);
        return $values;
    }
}
