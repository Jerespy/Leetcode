# 🟢 #111 - 111. Minimum Depth of Binary Tree

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
    public int minDepth(TreeNode root) {
        if (root == null) return 0;
        int left = minDepth(root.left);
        if (left == 0) left = 99999;
        int right = minDepth(root.right);
        if (left == 0) right = 99999;
        if (left == 99999 && right == 99999) return 0;

        return 1 + Math.min(left, right);
    }
}
```



---
*Auto-synced by [LeetPush](https://github.com/yourusername/leetpush) 🚀*
