/* LeetCode #98: Validate Binary Search Tree
 * Difficulty: Medium
 * Topics: Tree, Depth-First Search, Binary Search Tree, Binary Tree
 * Language: java
 * Runtime: N/A | Memory: N/A
 * Submitted: 2026-08-31T15:08:10.004Z
 */

/**
 * Definition for a binary tree node.
 * public class TreeNode {
 *     int val;
 *     TreeNode left;
 *     TreeNode right;
 *     TreeNode() {}
 *     TreeNode(int val) { this.val = val; }
 *     TreeNode(int val, TreeNode left, TreeNode right) {
 *         this.val = val;
 *         this.left = left;
 *         this.right = right;
 *     }
 * }
 */
class Solution {
    public boolean isValidBST(TreeNode root) {
        long low = Long.MIN_VALUE, high = Long.MAX_VALUE;
        return isValidBST(root, low, high );

    }

    public boolean isValidBST(TreeNode root, long low, long high) {
        if (root == null) return true;
        // if node isn't between low and high false;
        // go left = isValidBST(root.left,low, root.val); //Going left were we have lower values, decrease the high
        // go right = isValidBST(root.right,low, root.val); //Going right were we have higher values, increase the low
        // compare left && right

        if (! (low < root.val && high > root.val)) return false;
        boolean left = isValidBST(root.left, low, root.val);
        boolean right = isValidBST(root.right, root.val, high);

        return left && right;
    }


}
