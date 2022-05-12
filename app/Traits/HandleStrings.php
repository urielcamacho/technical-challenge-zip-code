<?php

namespace App\Traits;

trait HandleStrings
{
    /**
     * Remove accents from a string
     * 
     * @param  string $string
     * 
     * @return string
     */
    public function sanitizeString($str)
    {
        return strtr(
            utf8_decode($str),
            utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'),
            'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'
        );
    }
}
