class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function getLucky($s, $k) {
         $letter = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10, 'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20, 'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26] ;

         $str = '';

         for ($i=0; $i < strlen($s); $i++) 
         { 
            $str .= $letter[$s[$i]];
         }
         
         

         return $this->sum($str, $k);
    }
    function sum($str, $k)
     {
        if($k == 0) return $str;
        $str = str_split($str);
        return $this->sum(array_sum($str), $k-1);
     }
}