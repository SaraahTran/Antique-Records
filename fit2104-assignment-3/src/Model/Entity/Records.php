<?php
class Records extends Entity
{
    /**@var array
     * */


    protected $_accessible = [
        'id' => true,
        'name' => true,
        'artist' => true,
        'year' => true,
        'genre' => true,
        'no_of_disc' => true,
    ];

}
