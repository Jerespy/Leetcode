class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function differenceOfSum($nums) {
        $element = array_sum($nums);
        $digit = $this->sumDigit($nums);
        
        return abs($element - $digit);
    }
    
    function sumDigit($digit)
    {
        $sum = 0;
        for($i=0; $i < count($digit); $i++)
        {
            $sum += strlen($digit[$i]) > 1 ? array_sum(str_split($digit[$i])) : $digit[$i];
        }
        
        return $sum;
        
    }
}