<?php

class Character
{
    private $name;
    private $hltPoints;
    private $attPoints;
    private $defPoints;
    private $warCry;
    private $race;
    private $equipment;

    public function __construct($race, $name)
    {
        $this->race = $race;
        $this->name = $name;
        $this->hltpoints = 100;
        $this->attpoints = 10;
        $this->defpoints = 5;
        $this->warCry = 'Attack';

        if ($race == 'Orc')
            $this->warCry = 'wwouogrouroulou mlll !!';
    }

    public function get_warcry()
    {
        return $this->warCry;
    }

    // Manage equipment
    public function add_equipment(Equipment $equip)
    {
        $this->equipment = $equip;
    }

    public function remove_equipment()
    {
        $this->equipment = null;
    }

    public function display_equipment()
    {
        echo $this->equipment;
    }
}
