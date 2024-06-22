<?php
namespace System\Linq;
class CachingComparer_2 extends \System\Linq\CachingComparer_1
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Func_2[TElement,TKey]
	 */
	protected $_keySelector;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Generic\IComparer_1[TKey]
	 */
	protected $_comparer;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected $_descending;
	/**
	 * @field
	 * @var \TKey
	 */
	protected $_lastKey;
	/**
	 * @param \System\Func_2 $keySelector [generic: TElement,TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @param \System\Boolean|bool $descending
	 */
	public function __construct($keySelector, $comparer, $descending){}
}