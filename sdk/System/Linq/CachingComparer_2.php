<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class CachingComparer_2 extends \System\Linq\CachingComparer_1
{
	/**
	 * @var \System\Func_2[TElement,TKey]
	 * @field
	 */
	protected readonly $_keySelector;
	/**
	 * @var \System\Collections\Generic\IComparer_1[TKey]
	 * @field
	 */
	protected readonly $_comparer;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected readonly $_descending;
	/**
	 * @var \TKey
	 * @field
	 */
	protected $_lastKey;
}
