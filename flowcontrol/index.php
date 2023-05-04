<?php
$uniteType = "policestation";
$uniticon = "";
$unitService = "";

switch($uniteType){
    case "hospital":
        $uniticon = "Hospital.png";
        $unitService = "For Medical Service";
        displayIniteInformation();
        break;

     case "university":
        $uniticon = "university.png";
        $unitService = "For Education Service";
        displayIniteInformation();
        break;

    case "policestation":
        $uniticon = "policeStation.png";
        $unitService = "For protection Service";
        displayIniteInformation();
        break;
    default:
        echo "Undefined Unit";
        break;
}

/**
 * Summary of displayIniteInformation
 * @return void
 */
function displayIniteInformation() : void
    {
        global $uniteType, $uniticon, $unitService;
        echo "Unit Type : " . strtoupper($uniteType);
        echo "Unit Image : " . strtoupper($uniticon);
        echo "Unit Service : " . strtoupper($unitService);
    }

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


// case fall through 
$word = 'Mango';
$first = $word[0];

switch($first){
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo $word . "  " .   "starts with vowel.";
        break;
    default:
        echo $word . "   " .  "starts with consonent.";
        break;


}

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


// case and boolean expression 

$randomizer = rand(1, 50);

switch($randomizer)
{
    case ($randomizer <= 20):
        $font_size = '11';
        break; 

    case ($randomizer <= 30):
        $font_size = '12';
        break; 

    case ($randomizer <= 40):
        $font_size = '13';
        break;
    default:
        $font_size = "10";
        break;
}

echo '<span style="font-size:' . $font_size . ';">www.mahbub.com</span>';


echo "<br/>";
echo "<br/>";
echo "<br/>";


$randomizer1 = rand(1, 50);

switch($randomizer1):

    case ($randomizer1 <= 20):
        $font_size = '11';
        break; 

    case ($randomizer1 <= 30):
        $font_size = '12';
        break; 

    case ($randomizer1 <= 40):
            $font_size = '13';
            break;
     default:
        $font_size = "10";
        break;
endswitch;

echo '<span style="font-size:' . $font_size . ';">www.mahbubs.com</span>';