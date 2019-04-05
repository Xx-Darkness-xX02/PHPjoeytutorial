<?php
/**
 * Created by PhpStorm.
 * User: kroel
 * Date: 5-4-2019
 * Time: 09:45
 */

$zoekterm = $_POST['zoekterm'];
switch ($zoekterm){
    case "sedan":
        echo 'je hebt de '.$zoekterm.' als carrosorie gekozen.'.' leuk model!';
        break;
    case "hatchback":
        echo 'je hebt de '.$zoekterm.' als carrosorie gekozen.'.' dat is een kleintje ;)';
        break;
    case "station":
        echo 'je hebt de '.$zoekterm.' als carrosorie gekozen.'.' dat is een grote!';
        break;
    case "coupe":
        echo 'je hebt de '.$zoekterm.' als carrosorie gekozen.'.' je gaat voor de snelle bolide!';
        break;
    case "suv":
        echo 'je hebt de '.$zoekterm.' als carrosorie gekozen.'.' ga je offroaden? :P';
        break;
    default:
        echo 'je hebt de '.$zoekterm.' als carrosorie gekozen.'.' dus je wilt uniek zijn :)';
        
}

$kleur = $_POST['kleur'];
switch ($kleur){
    case "rood":
        echo ' met '.$kleur.' als kleur,'.' wow rood is een mooie kleur!';
        break;
    case "geel":
        echo ' met '.$kleur.' als kleur,'.' geel is een opvallende kleur!';
        break;
    case "blauw":
        echo ' met '.$kleur.' als kleur,'." blauw is mijn lievelingskleur!";
        break;
    case "zwart":
        echo ' met '.$kleur.' als kleur,'." zwart straalt klasse uit.";
        break;
    case "roze":
        echo ' met '.$kleur.' als kleur,'.' roze zie je niet vaak!';
        break;
    default :
        echo ' met '.$kleur.' als kleur,'.' dat ziet er vast leuk uit!';
}

$merk = $_POST['merk'];
switch ($merk){
    case "ferrari":
        echo  " en het merk van de auto die jij wilt is $merk! Doe maar duur!";
        break;
    case "volkswagen":
        echo  ' en het merk van de auto die jij wilt is ' .$merk.'!'." volkswagen maakt mooie auto's";
        break;
    case "tesla":
        echo  ' en het merk van de auto die jij wilt is ' .$merk.'!'.' goed voor het milieu!';
        break;
    case "opel" :
        echo  ' en het merk van de auto die jij wilt is ' .$merk.'!'.' goedkope tanks :P';
        break;
    case "toyota":
        echo  ' en het merk van de auto die jij wilt is ' .$merk.'!'." betrouwbare auto's!";
        break;
    default:
        echo  ' en het merk van de auto die jij wilt is ' .$merk.'!'.'ook een mooie!';
}


