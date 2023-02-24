class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
	function stringMatching($words) {
	    
	    $freq = [];
	    for ($i=0; $i < count($words); $i++) 
	    {
	    	for ($j=0; $j < count($words); $j++) { 
	    		if ($i == $j) continue;
	    		
	    		if (is_numeric(strpos($words[$j], $words[$i])))  
	    		{
	    		 	$freq[] = $words[$i];
	    		} 

	    	}
	    }

	    return array_unique($freq);
	}
}