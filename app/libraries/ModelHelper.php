<?php namespace Libraries;


class ModelHelper
{


    /**
     * Build the model array from a supplied data and keys arrays.
     *
     * @param array $data
     * @param array $keys
     * @param bool $forceSave
     * @return array
     */
    public static function buildArray($data, $keys, $forceSave = false)
    {
        $modelData = [];
        foreach($keys as $key) {
            if (array_key_exists($key, $data) && !empty($data[$key])) {
                $modelData[$key] = $data[$key];
            } else if ($forceSave) {
                $modelData[$key] = null;
            }
        }

        return $modelData;
    }

} 