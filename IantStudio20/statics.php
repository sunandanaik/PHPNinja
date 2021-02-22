<?php
class Weather
{
    public static $tempCondition =['cold', 'mild', 'warm'];
    // private static $tempCondition =['cold', 'mild', 'warm']; //if private then not allowed to access outside class.

    public static function celsiusTofarenheit($c)
    {
        return $c * 9 / 5 +32;
    }

    public static function determinetempCondition($f)
    {
        if($f < 40)
        {
            return self::$tempCondition[0];
        }
        else if($f < 70)
        {
            return self::$tempCondition[1];
        }
        else{
            return self::$tempCondition[2];
        }
    }
}
//$wobj = new Weather();
//print_r($wobj->tempCondition);
print_r(Weather ::$tempCondition); //directly accessing using classname
echo "<br/>";
echo Weather::celsiusTofarenheit(20)."<br/>";
echo Weather::determinetempCondition(50);

?>