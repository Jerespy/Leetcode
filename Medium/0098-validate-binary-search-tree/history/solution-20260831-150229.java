/* LeetCode #98: Validate Binary Search Tree
 * Difficulty: Medium
 * Topics: Tree, Depth-First Search, Binary Search Tree, Binary Tree
 * Language: java
 * Runtime: 2 ms | Memory: 42.7 MB
 * Submitted: 2026-08-31T15:02:29.805Z
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
        return isValidBST(root, Integer.MIN_VALUE, Integer.MAX_VALUE);

    }

    public boolean isValidBST(TreeNode root, int low, int high) {
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
