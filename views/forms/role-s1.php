<?php if($players1->role == 1){
    echo 'Maintank';
} elseif($players1->role == 2){
    echo 'Offtank';
} elseif($players1->role == 3){
    echo 'Hitscan-DPS';
} elseif($players1->role == 4){
    echo 'Flex-DPS';
} elseif($players1->role == 5){
    echo 'Mainsupport';
} elseif($players1->role == 6){
    echo 'Flex-Support';
}; ?>