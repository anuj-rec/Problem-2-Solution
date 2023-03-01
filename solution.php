<?php
function num_connected_components($head, $nums) {
    $nums_set = array_flip($nums); // flip the values to keys for faster lookup
    $count = 0;
    $prev = null;
    $node = $head;
    while ($node != null) {
        if (!isset($nums_set[$node->val])) {
            $prev = null;
        } elseif ($prev === null) {
            $count++;
        }
        $node = $node->next;
        $prev = isset($nums_set[$node->val]) ? $node->val : null;
    }
    return $count;
}
?>
