# 🟢 #2415 - 226. Invert Binary Tree

## Problem Info
| Field | Value |
|-------|-------|
| **Difficulty** | Easy |
| **Topics** | Tree, Depth-First Search, Breadth-First Search, Binary Tree |
| **Language** | Unknown |
| **Runtime** | N/A |
| **Memory** | N/A |
| **Solved** | 8/22/2026 |

## Solution
```txt
            // swap nodes
            // if node.left isn't empty push it into the stack
            // if node.right isn't empty push it into the stack

        if (root == null) return root;
        Deque<TreeNode> queue = new ArrayDeque<TreeNode>();

        queue.offer(root);

        while (! queue.isEmpty()) {
            TreeNode node = queue.poll();
            TreeNode temp = node.left;
            node.left = node.right;
            node.right = temp;

            if (node.left != null) queue.offer(node.left);
            // pop node from stack

```



---
*Auto-synced by [LeetPush](https://github.com/yourusername/leetpush) 🚀*
