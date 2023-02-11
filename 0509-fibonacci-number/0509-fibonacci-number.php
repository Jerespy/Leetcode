class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {
        if ($n == 0) {
        return 0;
      } else if ($n == 1 || $n == 2) {
        return 1;
      } else {
        return $this->fib($n-1) + $this->fib($n-2);
  }
        
        
    }
}