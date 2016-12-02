<?php namespace Faker\Provider;

class Profession extends \Faker\Provider\Base
{
    protected static $professionList = array(
        'Butcher',
        'Lawyer',
        'Librarian'
    );

    public function profession()
    {
        $format = static::randomElement(static::$professionList);
        return $this->generator->parse($format);
    }

}
