<?php
namespace Avalonia\Utilities;
class WeakHashList_1 extends \System\Object
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const DefaultArraySize = '8';
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEmpty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $NeedCompact;
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Remove($item){}
	private function ArrCompact(){}
	/**
	 * @return \System\Void|void
	 */
	public function Compact(){}
	/**
	 * @param \Avalonia\Collections\Pooled\PooledList_1 $list [generic: T]
	 * @return \System\Void|void
	 */
	public static function ReturnToSharedPool($list){}
	/**
	 * @param \System\Func_1 $factory [generic: Avalonia\Collections\Pooled\PooledList_1[T]
	 * @return \Avalonia\Collections\Pooled\PooledList_1[T]
	 */
	public function GetAlive($factory){}
	/**
	 */
	public function __construct(){}
}