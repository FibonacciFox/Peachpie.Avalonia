<?php
namespace Avalonia\Rendering\Composition\Expressions;
class ExpressionParser extends \System\Object
{

	/**
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public static function Parse($s){}
	private static function TryParseAtomic($parser, &$expr){}
	private static function TryParseOperator($parser, &$op){}
	private static function ParseTillTerminator($parser, $terminatorChars, $throwOnTerminator, $throwOnEnd, &$token){}
	/**
	 */
	public function __construct(){}
}