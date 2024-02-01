<?php

class Continent {
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent= $continent;
    }
}

class Country extends Continent {
    public $nameCountry;

    public function __construct($continent, $nameCountry)
    {
        parent::__construct($continent);
        $this->nameCountry = $nameCountry;
    }
}

class Region extends Country {
    public $nameRegion;

    public function __construct($continent, $nameCountry, $nameRegion)
    {
        parent::__construct($continent, $nameCountry);
        $this->nameRegion = $nameRegion;
    }
}

class Province extends Region {
    public $nameProvince;

    public function __construct($continent, $nameCountry, $nameRegion, $nameProvince)
    {
        parent::__construct($continent, $nameCountry, $nameRegion);
        $this->nameProvince = $nameProvince;
    }
}

class City extends Province {
    public $nameCity;

    public function __construct($continent, $nameCountry, $nameRegion, $nameProvince, $nameCity)
    {
        parent::__construct($continent, $nameCountry, $nameRegion, $nameProvince);
        $this->nameCity = $nameCity;
    }
}

class Street extends City {
    public $nameStreet;

    public function __construct($continent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet)
    {
        parent::__construct($continent, $nameCountry, $nameRegion, $nameProvince, $nameCity);
        $this->nameStreet = $nameStreet;
    }

    public function getMyLocation(){
        return "Mi trovo in {$this->nameContinent}, {$this->nameCountry}, {$this->nameRegion}, {$this->nameProvince}, {$this->nameCity}, {$this->nameStreet}";
    }
}


$mylocation = new Street("Europa", "Italia", "Puglia", "Bari", "Monopoli", "via San Marco");


echo $mylocation->getMyLocation();

