<?php if($player->role == 1){
    echo 'Maintank';
} elseif($player->role == 2){
    echo 'Offtank';
} elseif($player->role == 3){
    echo 'Hitscan-DPS';
} elseif($player->role == 4){
    echo 'Flex-DPS';
} elseif($player->role == 5){
    echo 'Mainsupport';
} elseif($player->role == 6){
    echo 'Flex-Support';
}; ?>