<?php
namespace Avalonia\Controls\Utils;
/**
 */
class StringUtils extends \System\Object
{
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsEol($c){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $index
	 * @return \System\Boolean
	 */
	public static function IsStartOfWord($text, $index){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $index
	 * @return \System\Boolean
	 */
	public static function IsEndOfWord($text, $index){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $cursor
	 * @return \System\Int32|int
	 */
	public static function PreviousWord($text, $cursor){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $cursor
	 * @return \System\Int32|int
	 */
	public static function NextWord($text, $cursor){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCharClass($c){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $pos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LineBegin($text, $pos){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $cursor
	 * @param \System\Boolean $include
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LineEnd($text, $cursor, $include){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
