<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class Value extends \System\ValueType
{
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 * @field
	 */
	public $Variant;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\IExpressionObject
	 * @field
	 */
	public $Object;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $v
	 * @return \Avalonia\Rendering\Composition\Animations\Value
	 */
	public static function op_Implicit($v){}
}
