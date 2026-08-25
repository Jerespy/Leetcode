# 🟢 #112 - 112. Path Sum

## Problem Info
| Field | Value |
|-------|-------|
| **Difficulty** | Easy |
| **Topics** | Tree, Depth-First Search, Breadth-First Search, Binary Tree |
| **Language** | Unknown |
| **Runtime** | N/A |
| **Memory** | N/A |
| **Solved** | 8/25/2026 |

## Solution
```txt
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
    public boolean hasPathSum(TreeNode root, int targetSum) {
        if (root == null) return false;
        return sumNode(root,targetSum) == 0;
    }

    public int sumNode(TreeNode root, int targetSum) {
        if (root == null) return -1;
        // targetSum = targetSum - root.val;
        // is this a leaf node && (targetSum - root.val) == 0 return 0; // PATH FOUND.
        // int left = sumNode(root.left,targetSum);
        // if left == 0 return 0;
        // return sumNode(root.right,targetSum);

        targetSum = targetSum - root.val;
        if ((root.left == null && root.right == null) && targetSum == 0 ) return 0;
        int left =  sumNode(root.left,targetSum);
        if (left == 0) return 0;
        return sumNode(root.right,targetSum);

    }
}
```



---
*Auto-synced by [LeetPush](https://github.com/yourusername/leetpush) 🚀*
