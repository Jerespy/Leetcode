class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    		function isPalindrome($s)
	{

		if($s == " ")
	    {
	        return true;
	    }
	    $s = trim(strtolower($s));
	    $s = preg_replace('/[^a-zA-Z0-9]/','',$s);
		for ($i=0, $j=strlen($s)-1; $i < strlen($s); $j--, $i++) 
		{ 
			if ($s[$i] != $s[$j]) return false;
		}

		return true;
	}

}