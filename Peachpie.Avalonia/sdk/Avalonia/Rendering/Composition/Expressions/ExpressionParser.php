<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class ExpressionParser extends \System\Object
{
	/**
	 * @param \System\ReadOnlySpan_1 $s
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public static function Parse($s){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Dot(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\TokenParser& $parser
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression& $expr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseAtomic($parser, $expr){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\TokenParser& $parser
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionType& $op
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseOperator($parser, $op){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\TokenParser& $parser
	 * @param \System\String|string $terminatorChars
	 * @param \System\Boolean $throwOnTerminator
	 * @param \System\Boolean $throwOnEnd
	 * @param \System\Nullable_1& $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseTillTerminator($parser, $terminatorChars, $throwOnTerminator, $throwOnEnd, $token){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
