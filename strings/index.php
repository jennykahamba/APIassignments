$word = explode("," ,strtoupper($Wambua_corrupted_employees));
//print_r($word);
$word2 = array_splice(array_unique($word), 0, 7);


//print_r ($word2);
echo "<table border='1'>";
echo "<tr>";
foreach ($word2 as $key ) {

  $newkey=  preg_replace('/[0-9@#$%>>+=<\/-]+/', '', $key);
  echo "<td><strong>$newkey</strong></td>";

}
echo "</tr>";

$words = explode(",",strtoupper($Wambua_corrupted_employees));
$word3 = array_splice(array_unique($words), 8, 254);
$array_of_rows = array_chunk($word3,7);
// echo '<table border="1">';
foreach ($array_of_rows as $cells ) {
  echo '<tr>';
  $x = 1;
while( $x <= 7){
    foreach($cells as $cell):

      $cell2 = preg_replace('/[@#^$&%>>;+=<\/-]+/', '', $cell);

    $x++;
echo "<td>{$cell2}</td>";
    endforeach;

    }
  echo '</tr>';
  //echo (preg_replace('/[0-9@#$%>>+=<\/-]+/', '', $key));
  //echo "<table><tr><th>$newkey</th></tr><tr><td>key</td></tr></table>";
}
echo '</table>'
