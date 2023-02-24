class Solution {

    /**
     * @param String $sentence
     * @param String $searchWord
     * @return Integer
     */
    function isPrefixOfWord($sentence, $searchWord) {
        $sentence = explode(" ", $sentence);
        $prefixes = [];
        $searchLength = strlen($searchWord);
        for($i =0; $i<count($sentence); $i++)
        {
            $prefixes[] = substr($sentence[$i], 0,$searchLength);
        }

        for ($i=0; $i < count($prefixes) ; $i++) { 
            if($prefixes[$i] == $searchWord) return ++$i;
        }

        return -1;
    }
}