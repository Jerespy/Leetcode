class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        // Check if they are of same lenght
        if(strlen($s) != strlen($t)) return false;
        
        $s = str_split($s);
        $t = str_split($t);
        sort($s);
        sort($t);
        for($i =0; $i < count($s); $i++)
        {
            if($s[$i] != $t[$i])
            {
                return false;
            }
        }
        return true;
        
        
        
    }
}