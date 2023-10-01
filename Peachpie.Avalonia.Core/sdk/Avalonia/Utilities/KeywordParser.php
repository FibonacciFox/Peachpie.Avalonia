<?php
namespace Avalonia\Utilities;
/**
 */
class KeywordParser extends \System\Object
{
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \System\String|string $keyword
	 * @return \System\Boolean
	 */
	public static function CheckKeyword($r, $keyword){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \System\String|string $keyword
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckKeywordInternal($r, $keyword){}
	/**
	 * @param \System\ReadOnlySpan_1 $left
	 * @param \System\ReadOnlySpan_1 $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SpanEquals($left, $right){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \System\String|string $keyword
	 * @return \System\Boolean
	 */
	public static function TakeIfKeyword($r, $keyword){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
