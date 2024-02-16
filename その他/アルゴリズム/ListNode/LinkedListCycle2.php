<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function detectCycle($head)
    {
        $check_list = [];
        $current_node = $head;

        while ($current_node !== null) {
            $index = array_search($current_node, $check_list, true);
            if ($index) {
                return $index;
            }
            $check_list[] = $current_node;
            $current_node = $current_node->next;
        }
        return false;
    }
}
