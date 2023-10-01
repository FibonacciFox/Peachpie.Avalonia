<?php
namespace Avalonia\Controls\Utils;
/**
 */
class IEnumerableUtils extends \System\Object
{
	/**
	 * @param \System\Collections\IEnumerable $items
	 * @param \System\Object|object $item
	 * @return \System\Boolean
	 */
	public static function Contains($items, $item){}
	/**
	 * @param \System\Collections\IEnumerable $items
	 * @param \System\Int32& $count
	 * @return \System\Boolean
	 */
	public static function TryGetCountFast($items, $count){}
	/**
	 * @param \System\Collections\IEnumerable $items
	 * @return \System\Int32|int
	 */
	public static function Count($items){}
	/**
	 * @param \System\Collections\IEnumerable $items
	 * @param \System\Object|object $item
	 * @return \System\Int32|int
	 */
	public static function IndexOf($items, $item){}
	/**
	 * @param \System\Collections\IEnumerable $items
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	public static function ElementAt($items, $index){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
