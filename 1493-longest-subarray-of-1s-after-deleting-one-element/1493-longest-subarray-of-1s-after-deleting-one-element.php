class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubarray($nums) {
        // freq[], max=0, start=0
    $freq = ['0'=>0,'1'=>0]; $max = 0; $start=0;
    // Loop nums
    for ($i=0; $i < count($nums); $i++) { 
    	
    	// While freqAssoc[0] == 1 && curent index == 0
    	while ($freq[0] == 1 && $nums[$i] == 0) {
    		// check if start element is 1
    		if ($nums[$start] == 1) {
    			
                $freq[1]--;
    		}
    		else
    		{
                $freq[0]--;
    		} 
    		$start++; 
    	}
    	// Check value of current element
       if ($nums[$i] == 1) {
    			
            $freq[1]++;
		}
		else
		{

            $freq[0]++;
		} 
        $max = max($max, ($freq[1] + $freq[0]) - 1);
    }
        
    return $max;
            
        
            
        
    }
}