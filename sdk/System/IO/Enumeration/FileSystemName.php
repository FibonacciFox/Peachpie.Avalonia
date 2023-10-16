<?php
namespace System\IO\Enumeration;
/**
 */
class FileSystemName extends \System\Object
{
	/**
	 * @param \System\String|string $expression
	 * @return \System\String|string
	 */
	public static function TranslateWin32Expression($expression){}
	/**
	 * @param \System\ReadOnlySpan_1 $expression
	 * @param \System\ReadOnlySpan_1 $name
	 * @param \System\Boolean $ignoreCase
	 * @return \System\Boolean
	 */
	public static function MatchesWin32Expression($expression, $name, $ignoreCase){}
	/**
	 * @param \System\ReadOnlySpan_1 $expression
	 * @param \System\ReadOnlySpan_1 $name
	 * @param \System\Boolean $ignoreCase
	 * @return \System\Boolean
	 */
	public static function MatchesSimpleExpression($expression, $name, $ignoreCase){}
	/**
	 * @param \System\ReadOnlySpan_1 $expression
	 * @param \System\ReadOnlySpan_1 $name
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Boolean $useExtendedWildcards
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchPattern($expression, $name, $ignoreCase, $useExtendedWildcards){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
