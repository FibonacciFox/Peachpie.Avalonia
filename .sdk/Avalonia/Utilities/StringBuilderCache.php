<?php
namespace Avalonia\Utilities;
class StringBuilderCache extends \System\Object
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const MaxBuilderSize = '360';
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
}