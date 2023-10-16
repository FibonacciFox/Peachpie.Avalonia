<?php
namespace System\Collections\ObjectModel;
/**
 */
class CollectionHelpers extends \System\Object
{
	/**
	 * @param \System\Int32|int $sourceCount
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected static function ValidateCopyToArguments($sourceCount, $array, $index){}
	/**
	 * @param \System\Collections\Generic\ICollection_1 $collection
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected static function CopyTo($collection, $array, $index){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
