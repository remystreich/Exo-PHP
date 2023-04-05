<!--Faire une fonction qui permet de générer un tableau html à partir d’un tableau php. -->
<?php
    function tab_to_html($array){
        echo '<table>';
        for ($i=0; $i <count($array) ; $i++) { 
            echo '<tr>'.'</tr>';
            for ($j=0; $j < count( $array[$i] ) ; $j++) { 
                echo'<td>'.$array[$i][$j] .'</td>';
            }
        }
        echo '</table>';
    }
$tab = [
    [1,2,2,1,1],
    [2,2,2,2,2],
    [3,3,3,3,3]
];
tab_to_html($tab);

?>
