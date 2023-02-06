class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function minimumDifference($nums, $k) {
	    $n = count($nums);
    sort($nums);
    $minDifference = PHP_INT_MAX;
    for ($i = 0; $i <= $n - $k; $i++) {
        $difference = $nums[$i + $k - 1] - $nums[$i];
        if ($difference < $minDifference) {
            $minDifference = $difference;
        }
    }
    return $minDifference;


    }
}