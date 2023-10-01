<?php
namespace Avalonia\LogicalTree;
/**
 */
class ControlLocator extends \System\Object
{
	/**
	 * @param \Avalonia\LogicalTree\ILogical $relativeTo
	 * @param \System\Int32|int $ancestorLevel
	 * @param \System\Type $ancestorType
	 * @return \System\IObservable_1
	 */
	public static function Track($relativeTo, $ancestorLevel, $ancestorType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
