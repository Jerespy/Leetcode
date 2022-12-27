class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        //add num2 elements to nums1
        for($i=0; $i<count($nums2);$i++)
        {
            array_push($nums1,$nums2[$i]);
        }
        sort($nums1);
        $length = count($nums1);

        // Check if count of num1 is odd
        if($length%2 != 0)
            // return the mid element
        {
            return $nums1[floor($length/2)];
        }
        else
        {
            $index1 = ($length/2);
            $index2 = $index1 - 1;
            return ($nums1[$index1] + $nums1[$index2])/2;
        }

    }
}