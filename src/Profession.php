<?php namespace Faker\Provider;

class Profession extends \Faker\Provider\Base
{
    /**
     * @var array
     *
     * See https://en.wikipedia.org/wiki/List_of_professions
     */
    protected static $professionList = array(
        'Accountant',
        'Air traffic controller',
        'Aircraft pilot',
        'Anesthesiologist',
        'Architect',
        'Astronomer',
        'Audiologist',
        'Biologist',
        'Botanist',
        'Chemist',
        'Chiropractor',
        'Clergy',
        'Dentist',
        'Ecologist',
        'Engineer',
        'Geneticist',
        'Geologist',
        'Health inspector',
        'Immunologist',
        'Interpreter',
        'Lawyer',
        'Meteorologist',
        'Military officer',
        'Nurse',
        'Oceanographer',
        'Optometrist',
        'Paleontologist',
        'Park ranger',
        'Pharmacist',
        'Pharmacologist',
        'Philosopher',
        'Physician',
        'Physicist',
        'Podiatrist',
        'Police officer',
        'Professor',
        'Psychologist',
        'Radiographer',
        'Radiotherapist',
        'Scientist',
        'Sea captain',
        'Social Worker',
        'Surgeon',
        'Surveyor',
        'Teacher',
        'Translator',
        'Urban Planner',
        'Veterinarian',
        'Virologist',
        'Zoologist',

    );

    public function profession()
    {
        $format = static::randomElement(static::$professionList);

        return $this->generator->parse($format);
    }

}
