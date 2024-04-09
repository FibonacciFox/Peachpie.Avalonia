<?php
namespace Avalonia\Utilities;
class ArrayCompacter extends \Avalonia\Utilities\Compacter
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Utilities\FrugalListBase_1[T]
	 */
	protected $_store;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_validItemCount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_previousEnd;
	/**
	 * @param \Avalonia\Utilities\ArrayItemList_1 $store [generic: T]
	 * @param \System\Int32|int $newCount
	 */
	public function __construct($store, $newCount){}
}