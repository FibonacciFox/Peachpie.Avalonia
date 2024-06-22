<?php
namespace Avalonia\Rendering\Composition\Animations;
final class Value extends \System\ValueType
{

	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public $Variant;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Expressions\IExpressionObject
	 */
	public $Object;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $v
	 * @return \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot+Value
	 */
	public static function op_Implicit($v){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\IExpressionObject $o
	 */
	public function __construct($o){}
}