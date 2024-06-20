<?php

namespace Dinushchathurya\Division;

class Division
{

    public static function getDistricts()
    {
        return array_keys(self::getAllDevisionals());
    }

    public static function getDivisionalSecretariats($district)
    {
        return array_keys(self::getAllDevisionals()[$district]);
    }

    public static function getDivisions($division)
    {
        foreach (self::getAllDevisionals() as $district => $curDivision) {
            if (in_array($division, array_keys($curDivision))) {
                return $curDivision[$division];
            }
        }
    }

    public static function getAllDevisionals()
    {
        $myfile = fopen("divisionals.json", "r") or die("Unable to open file!");
        $data = fread($myfile, filesize("divisionals.json"));
        fclose($myfile);
        return json_decode($data, true);
    }
}