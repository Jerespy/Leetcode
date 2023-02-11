class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        // If num length is == 1 return $num
        if(strlen($num) == 1 || strlen($num) == 0) return $num;
        // Explode the number and add the values
        $num = str_split($num);
        $sum = 0;
        for($i = 0; $i < count($num); $i++)
        {
            $sum += $num[$i];
        }
        
        return $this->addDigits($sum);
    }
}