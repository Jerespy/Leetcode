# 🟡 #103 - 103. Binary Tree Zigzag Level Order Traversal

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
            List<Integer> levelArray = new ArrayList<>();
            int currentItemInQueue = queue.size();

            while (currentItemInQueue > 0 ) {
                TreeNode polledNode = queue.poll();
                levelArray.add(polledNode.val);
                if (isRightDirection) {
                }
                    if (polledNode.right != null) queue.offer(polledNode.right);
                    if (polledNode.left != null) queue.offer(polledNode.left);
                    isRightDirection = false;
                else {
                    if (polledNode.left != null) queue.offer(polledNode.left);
                    isRightDirection = true;
                }
                currentItemInQueue--;
                    if (polledNode.right != null) queue.offer(polledNode.right);
            }
        while (! queue.isEmpty()) {

        queue.offer(root);

```



---
*Auto-synced by [LeetPush](https://github.com/yourusername/leetpush) 🚀*
