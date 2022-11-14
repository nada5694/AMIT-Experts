<!DOCTYPE html>
<html>
<body>

<?php
$towersHeight = [4,4,1,3]; 
$tallest = max($towersHeight);
$tallest_count = 0;

foreach($towersHeight as $towerHeight){
if ($towerHeight == $tallest) {
        $tallest_count = $tallest_count + 1;
      // $tallest_count += 1;
      
    } else {
        $tallest_count += 0;
        
    }
}

echo "The Highest Tower Height: ".$tallest .'<br>';
echo "The Total Number Of This Height: ".$tallest_count ;

?>
</body>
</html>
