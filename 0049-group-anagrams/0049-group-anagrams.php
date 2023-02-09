class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
	function groupAnagrams($strs) {
	    // Check if string is emtpy and return an []
	    // print_r($strs);
	    if(count($strs) == 1 && ($strs[0]== "" || count($strs) == 0)) return [[""]];
	    // create a freq []
	    $freq = [];
	    // Loop strs[] 
	    for ($i=0; $i < count($strs); $i++) { 
	    	// originalElement = strs[i]
	    	$originalElement = $strs[$i];
	        // sort the split the element
	        $sortedElement = str_split($strs[$i]);
	        sort($sortedElement);
	        $sortedElement = implode("", $sortedElement);
	        
	        // check if the $sortedElement is an index of freq[]
	        if (isset($freq[$sortedElement])) {
		        // yes, push it, into that index
	        	array_push($freq[$sortedElement], $originalElement);
	        }
	        else
	        {
	        	// no, create the index and push the original element
	        	$freq[$sortedElement] = array();
	        	array_push($freq[$sortedElement], $originalElement);
	        }
	    }
	    return $freq;
	}
}