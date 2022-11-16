class Solution {

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @param Integer $threshold
     * @return Integer
     */
    function numOfSubarrays($arr, $k, $threshold) {
    $counter = 0;
    $average = 0;
    $sum =0;
    for ($i=0; $i < $k; $i++) { 
    	$sum += $arr[$i];
    }

    $counter = ($sum/$k) >= $threshold ? 1 : 0;

    for ($i=$k; $i <count($arr) ; $i++) { 
    	$sum = $sum - $arr[$i - $k] + $arr[$i];
    	$average = ($sum)/$k;
    	if($average >= $threshold)
    		$counter++;

    	
    }

    return $counter;

}
}