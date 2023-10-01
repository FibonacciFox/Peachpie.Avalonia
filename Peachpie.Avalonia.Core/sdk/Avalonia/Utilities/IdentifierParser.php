<?php
namespace Avalonia\Utilities;
/**
 */
class IdentifierParser extends \System\Object
{
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @return \System\ReadOnlySpan_1
	 */
	public static function ParseIdentifier($r){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidIdentifierStart($c){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidIdentifierChar($c){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
