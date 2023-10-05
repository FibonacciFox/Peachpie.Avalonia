<?php
namespace Avalonia\Controls\Utils;
/**
 */
class CollectionUtils extends \System\Object
{
	/**
	 * @var \System\Collections\Specialized\NotifyCollectionChangedEventArgs
	 * @property
	 */
	public readonly $ResetEventArgs;
	/**
	 * @return \System\Collections\Specialized\NotifyCollectionChangedEventArgs
	 */
	public static function get_ResetEventArgs(){}
	/**
	 * @param \System\Collections\Generic\List_1 $list
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Controls\Utils\T $item
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public static function InsertMany($list, $index, $item, $count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
