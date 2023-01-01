class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        // Check if n is less than or equal to 0
        if ($n <= 0) {
            return false;
        }

        // Check if n is a power of two
        while ($n % 2 == 0) {
            $n = $n / 2;
        }

        // Return true if n is 1, false otherwise
        return $n == 1;
        }
}