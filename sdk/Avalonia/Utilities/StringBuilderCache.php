<?php
namespace Avalonia\Utilities;
/**
 */
class StringBuilderCache extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $MaxBuilderSize;
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Text\StringBuilder
	 */
	public static function Acquire($capacity){}
	/**
	 * @param \System\Text\StringBuilder $sb
	 * @return \System\Void|void
	 */
	public static function Release($sb){}
	/**
	 * @param \System\Text\StringBuilder $sb
	 * @return \System\String|string
	 */
	public static function GetStringAndRelease($sb){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
