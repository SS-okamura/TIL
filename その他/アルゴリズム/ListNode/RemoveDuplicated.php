<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head)
    {
        $current = $head;
        while ($current !== null && $current->next !== null) {
            // 現在のノードの値と次のノードの値が同じ場合
            if ($current->val === $current->next->val) {
                // 次のノードをスキップして、重複を削除
                $current->next = $current->next->next;
            } else {
                // 次のノードが重複していない場合、次のノードに進む
                $current = $current->next;
            }
        }
        return $head;
    }
}
