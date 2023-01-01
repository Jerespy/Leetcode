class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        // Initialize a count to 0
        $count = 0;
        // Continuously mask off the least significant bit and add it to the count until n is 0
        while ($n) {
            $count += $n & 1;
            $n >>= 1;
        }
        // Return the count
        return $count;
    }

}