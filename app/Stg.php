<?php

namespace App;

class Stg
{
    public $matches = null;
    public $cimage = null;
    public $ctemplate = null;
    public $matches2= null;
    public $resolution= null;

    public function __construct($oldStg){

        if($oldStg){

            $this->matches = $oldStg->matches;
            $this->cimage = $oldStg->cimage;
            $this->ctemplate = $oldStg->ctemplate;
            $this->resolution = $oldStg->resolution;
            $this->matches2 = $oldStg->matches2;

        }
    }

public function addcimage($cimage){

    $storedCimage = ['cimage'=>$cimage->cimage, 'cimage2'=>$cimage->cimage2];
    if($this->cimage){
            $storedCimage=$this->cimage;
    }

    $this->cimage=$storedCimage;

}

public function addctemplate($ctemplate){

    $storedCtemplate = ['name'=>$ctemplate->name, 'default_background'=>$ctemplate->default_background, 'default_background2'=>$ctemplate->default_background2, 'max_matches'=>$ctemplate->max_matches];
    if($this->ctemplate){
            $storedCtemplate=$this->ctemplate;
    }

    $this->ctemplate=$storedCtemplate;

}

public function addresolution($resolution){

    $storedResolution = ['width'=>$resolution->width, 'height'=>$resolution->height];
    if($this->resolution){
            $storedResolution=$this->resolution;
    }

    $this->resolution=$storedResolution;

}

public function addmatch($match, $name){

    $storedMatch = ['name'=>$name, 'hometeam'=>$match->hometeam, 'awaylogo'=>$match->awaylogo, 'homelogo'=>$match->homelogo, 'time'=>$match->time, 'awayteam'=>$match->awayteam, 'competition'=>$match->competition, 'date'=>$match->date, 'year'=>$match->year, 'mv'=>$match->mv, 'mn'=>$match->mn, 'day'=>$match->day, 'fd'=>$match->fd, 'dts'=>$match->dts];
    if($this->matches){
        foreach($this->matches as $match){
            if($match['name']===$name){
            $storedMatch=NULL;}
        }
    }
if($storedMatch!=NULL){
    $this->matches[]=$storedMatch;}

}

    public function deleteone($key, $remove){

        if($this->matches){
            foreach($this->matches as $key=>$match){
                if($match['name']===$remove){
                    unset($this->matches[$key]);
                }}}
            if($this->matches2!=NULL){
                foreach($this->matches2 as $key=>$match2){
                    if($match2['name']===$remove){
                        unset($this->matches2[$key]);
                    }}}
    }

    public function addmatches2($matches2){

        $storedMatches2 = $matches2;
        if($this->matches2){
                $storedMatches2=$this->matches2;
        }
    
        $this->matches2=$storedMatches2;
    
    }

}
