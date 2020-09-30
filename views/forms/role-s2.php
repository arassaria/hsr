<?php if($players2->role == 1){
    echo 'Maintank';
} elseif($players2->role == 2){
    echo 'Offtank';
} elseif($players2->role == 3){
    echo 'Hitscan-DPS';
} elseif($players2->role == 4){
    echo 'Flex-DPS';
} elseif($players2->role == 5){
    echo 'Mainsupport';
} elseif($players2->role == 6){
    echo 'Flex-Support';
}; ?>