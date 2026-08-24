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
                if (polledNode.right != null) queue.offer(polledNode.right);
                
                currentItemInQueue--;
            }
            isRightDirection = !isRightDirection;
                if (isRightDirection) {
                }
                    levelArray.add(polledNode.val); 
                else {
                }
                    levelArray.add(0, polledNode.val); 
            resultArray.add(levelArray);
        }
                TreeNode polledNode = queue.poll();
            while (currentItemInQueue > 0 ) {

            int currentItemInQueue = queue.size();
            List<Integer> levelArray = new ArrayList<>();
        while (! queue.isEmpty()) {

                if (polledNode.left != null) queue.offer(polledNode.left);
        return resultArray;

```



---
*Auto-synced by [LeetPush](https://github.com/yourusername/leetpush) 🚀*
