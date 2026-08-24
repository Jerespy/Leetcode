# ⚪ #103 - Binary Tree Zigzag Level Order Traversal

## Problem Info
| Field | Value |
|-------|-------|
| **Difficulty** | Unknown |
| **Topics** | N/A |
| **Language** | Unknown |
| **Runtime** | N/A |
| **Memory** | N/A |
| **Solved** | 8/24/2026 |

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
    public List<List<Integer>> zigzagLevelOrder(TreeNode root) {
        // create a stack
        // push root into the stack
        // result array
        // while stack is not empty
            // level array
            //counter =  queue.size
            // while counter > 0
                // polledNode = queue.poll
                // if polledNode.left != null push into queue
                // if polledNode.right != null push into queue
                // add polledNode.val to the levelArray
                // counter--;
            // add level array into result array
        
        // return resultArray;
        if (root == null) return new ArrayList<>();

        Deque<TreeNode> queue = new ArrayDeque<>();
        List<List<Integer>> resultArray = new ArrayList<>();
        boolean isRightDirection = true;
        
        queue.offer(root);

        while (! queue.isEmpty()) {
            // List<Integer> levelArray = new ArrayList<>();
            LinkedList<Integer> levelArray = new LinkedList<>();
            int currentItemInQueue = queue.size();

            while (currentItemInQueue > 0 ) {
                TreeNode polledNode = queue.poll();
                if (isRightDirection) {
                    // levelArray.add(polledNode.val);
                    levelArray.addLast(polledNode.val); 
                }
                else {
                    // levelArray.add(0, polledNode.val); 
                    levelArray.addFirst(polledNode.val);
                }
                if (polledNode.left != null) queue.offer(polledNode.left);
                if (polledNode.right != null) queue.offer(polledNode.right);
                
                currentItemInQueue--;
            }
            isRightDirection = !isRightDirection;
            resultArray.add(levelArray);
        }
        return resultArray;
    }
}
```



---
*Auto-synced by [LeetPush](https://github.com/yourusername/leetpush) 🚀*
