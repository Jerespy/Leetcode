# 🟡 #3417 - 103. Binary Tree Zigzag Level Order Traversal

## Problem Info
| Field | Value |
|-------|-------|
| **Difficulty** | Medium |
| **Topics** | Tree, Breadth-First Search, Binary Tree |
| **Language** | Unknown |
| **Runtime** | N/A |
| **Memory** | N/A |
| **Solved** | 8/24/2026 |

## Solution
```txt

        while (! queue.isEmpty()) {
            List<Integer> levelArray = new ArrayList<>();
            int currentItemInQueue = queue.size();

            while (currentItemInQueue > 0 ) {
                TreeNode polledNode = queue.poll();
                if (isRightDirection) {
                    levelArray.add(polledNode.val); 
                }
                else {
                    levelArray.add(0, polledNode.val); 
                }
                if (polledNode.left != null) queue.offer(polledNode.left);
                if (polledNode.right != null) queue.offer(polledNode.right);
                

```



---
*Auto-synced by [LeetPush](https://github.com/yourusername/leetpush) 🚀*
