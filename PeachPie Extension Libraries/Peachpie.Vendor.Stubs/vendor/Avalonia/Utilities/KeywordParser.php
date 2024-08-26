<?php
namespace Avalonia\Utilities;
class KeywordParser extends \System\Object
{

	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \System\String|string $keyword
	 * @return \System\Boolean|bool
	 */
	public static function CheckKeyword($r, $keyword){}
	private static function CheckKeywordInternal($r, $keyword){}
	private static function SpanEquals($left, $right){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \System\String|string $keyword
	 * @return \System\Boolean|bool
	 */
	public static function TakeIfKeyword($r, $keyword){}
}