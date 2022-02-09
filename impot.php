<?php


Class impot{

    protected $_name;
    protected $_income;
    public const HIGHT = 0.20;
    public const LOW = 0.15;


    /* Constructeur */

    public function __construct($name, $income){
        $this->_name = $name;
        $this->_income = $income;
    }

    /* Setters*/
/*
    public function setName($t){
        $this->_name = $t;
    }
    public function setIncome($i){
        $this->_income = $i;
    }

    /* Getters */

/*  public function name(){
        return $this->_name();
    }
    public function income(){
        return $this->_income();
    }

    

    /* Action */

    public function AfficheImpot(){
        $i = $this->CalculImpot();

        echo $this->_name.' votre impôt est de '.$i.' euros.';
    }

    public function CalculImpot(){
        if ($this->_income > 15000){
           $e = ($this->_income - 15000) * self::HIGHT;
           $p = 15000 * self::LOW;

           return $e + $p;


        }else{
            return $this->_income * self::LOW;
        }

    }















}