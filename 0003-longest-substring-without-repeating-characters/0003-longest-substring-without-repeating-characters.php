class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
    // freq = [],freqAssoc = [],max=0,left = 0
    $freq = []; $max = 0; $counter = 0; $freqAssoc = [];$left = 0;
    //loop throu $s initializing end to 0
    for ($end=0; $end < strlen($s); $end++) { 
    	// while element is in freqAssoc[]
    	while (isset($freqAssoc[$s[$end]])) {

    		unset($freqAssoc[$freq[$left]]);
    		// unset($freqAssoc[$freq[$left]]);
			
    		// remove the left elemen in freq array
			unset($freq[$left]);

    		// left++
    		$left++;
    	}
	    $freqAssoc[$s[$end]] = $s[$end];
	    array_push($freq, $s[$end]);
	    $max = max($max, $end-$left + 1);
    }
    return $max;	    
    
}
}