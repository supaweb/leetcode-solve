<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $usual = (string) $x;
        $reverse = $prefix = '';
        if ($usual[0] == '-') {
            $prefix = $usual[0];
            $usual = substr($usual, 1);
        }

        for($i = strlen($usual) - 1; $i >= 0; $i--) {
            $reverse .= $usual[$i];
        }
        $result = (int) ($prefix . $reverse);
        
        return abs($result) < 2147483647 ? $result : 0;
    }
}