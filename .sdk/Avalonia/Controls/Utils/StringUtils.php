<?php
namespace Avalonia\Controls\Utils;
class StringUtils extends \System\Object
{

	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsEol($c){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	public static function IsStartOfWord($text, $index){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
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
	private static function GetCharClass($c){}
	private static function LineBegin($text, $pos){}
	private static function LineEnd($text, $cursor, $include){}
}