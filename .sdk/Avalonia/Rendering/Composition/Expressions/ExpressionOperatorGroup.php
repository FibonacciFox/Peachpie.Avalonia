<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ExpressionOperatorGroupOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $from
	 * @param \System\Int32|int $to
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	#[MethodOverride]private function ToExpression_1 ($from, $to){}
	/**
	 * @deprecated
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	#[MethodOverride]public function ToExpression_2 (){}
}
final class ExpressionOperatorGroup extends \System\ValueType
{
	use ExpressionOperatorGroupOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $NotEmpty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $expr
	 * @return \System\Void|void
	 */
	public function AppendFirst($expr){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $expr
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionType $op
	 * @return \System\Void|void
	 */
	public function AppendWithOperator($expr, $op){}
	/**
	 * @uses ExpressionOperatorGroupOverride::ToExpression_1 <br>private , args: ($from, $to)<br>
	 * @uses ExpressionOperatorGroupOverride::ToExpression_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression|mixed|\override
	 */
	#[MethodOverridePublic]function ToExpression (\override ...$args){}
}