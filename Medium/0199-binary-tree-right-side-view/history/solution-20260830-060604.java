/* LeetCode #199: Binary Tree Right Side View
 * Difficulty: Medium
 * Topics: Tree, Depth-First Search, Breadth-First Search, Binary Tree
 * Language: java
 * Runtime: N/A | Memory: N/A
 * Submitted: 2026-08-30T06:06:04.235Z
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
    public List<Integer> rightSideView(TreeNode root) {
        // queue
        // add root to queue
        // list result output
        // while != queue.isEmpty
            // currentSize = queue.size();
            // Loop the queue (i=0, i < currentSize, i++)
                // is (i+1) == currentSize add it to result list
                // pollNode = poll node from queue;
                // pollNode.left ? queue.offer(pollNode.left);
                // pollNode.right ? queue.offer(pollNode.right);

        // return list result

        List<Integer> rightSideVales = new ArrayList<>();
        Deque<TreeNode> queue = new ArrayDeque<>();
        if (root== null) return rightSideVales;
        queue.offer(root);

        while (! queue.isEmpty()) {
            int currentSize = queue.size();
            for (int i=0; i < currentSize; i++) {
                TreeNode node = queue.poll();
                if ((i+1) == currentSize) rightSideVales.add(node.val);
                if (node.left != null) queue.offer(node.left);
                if (node.right != null) queue.offer(node.right);
            }
        }

        return rightSideVales;

    }
}
