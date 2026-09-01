/* LeetCode #98: Validate Binary Search Tree
 * Difficulty: Medium
 * Topics: Tree, Depth-First Search, Binary Search Tree, Binary Tree
 * Language: java
 * Runtime: N/A | Memory: N/A
 * Submitted: 2026-09-01T09:10:26.966Z
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
    // ## Not the best solution
    List<Integer> out = new ArrayList<>();
    public boolean isValidBST(TreeNode root) {
        addToList(root);

        for (int i=1, j=0; i < out.size(); i++,j++) {
            if(!(out.get(j) < out.get(i))) return false;
        }

        return true;
    }

    public void addToList(TreeNode root) {
        if (root == null) return ;
        addToList(root.left);
        out.add(root.val);
        addToList(root.right);

    }

}
