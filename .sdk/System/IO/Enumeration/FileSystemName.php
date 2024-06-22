<?php
namespace System\IO\Enumeration;
class FileSystemName extends \System\Object
{


	/**
	 * @param \System\String|string $expression
	 * @return \System\String|string
	 */
	public static function TranslateWin32Expression($expression){}
	/**
	 * @param \System\ReadOnlySpan_1 $expression [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $name [generic: System\Char]
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Boolean|bool
	 */
	public static function MatchesWin32Expression($expression, $name, $ignoreCase){}
	/**
	 * @param \System\ReadOnlySpan_1 $expression [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $name [generic: System\Char]
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Boolean|bool
	 */
	public static function MatchesSimpleExpression($expression, $name, $ignoreCase){}
	private static function MatchPattern($expression, $name, $ignoreCase, $useExtendedWildcards){}
}