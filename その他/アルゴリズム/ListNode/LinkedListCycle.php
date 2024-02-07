<?php

/**
 * 問題
 * 与えられたリストの$headからリンクリストに循環があるか判定
 */

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
     * @return Boolean
     * 
     * チェック済みの値を配列に入れ、その配列に値があればtrue
     */
    function hasCycle($head)
    {
        $checkList = [];
        $currentNode = $head;
        while ($currentNode !== null) {
            if (in_array($currentNode, $checkList, true)) {
                return true;
            }
            $checkList[] = $currentNode;
            $currentNode = $currentNode->next;
        }
        return false;
    }
}
