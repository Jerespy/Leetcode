class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
        
        $start =0; $max = 0;
        $sum = 0;
        for($i = 0; $i <$k; $i++)
        {
            $sum += $nums[$i];
        }
        
        $max = $sum/$k;
        
        if(count($nums) == $k) return $max;
        
        for($i = $k; $i < count($nums); $i++)
        {
            $sum = $sum - $nums[$i - $k] + $nums[$i];
            $max = max($max,$sum/$k);
        }
        return $max;
    }
}