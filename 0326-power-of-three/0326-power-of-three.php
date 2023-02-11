class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        // Check if $n ==0 return false
        if($n == 0) return false;
        // Check if $n ==1 return true
        if($n == 1) return true;
        // $div = divide n by 3, 
        // check if there's a reminder return false
        if($n%3 != 0) return false;
        
        // else call $this->isPowerOfThree($div)
        return $this->isPowerOfThree($n/3);
        
    }
}