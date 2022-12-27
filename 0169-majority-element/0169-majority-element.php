class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
    $freq = [];
        for($i =0; $i< count($nums); $i++)
        {
            if(isset($freq[$nums[$i]]))
            {
                $freq[$nums[$i]]++;
            }
            else
            {
                $freq[$nums[$i]] = 1;
            }
        }
        return array_search(max($freq), $freq);
    }
}