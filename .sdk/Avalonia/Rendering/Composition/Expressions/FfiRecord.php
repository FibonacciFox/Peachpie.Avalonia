<?php
namespace Avalonia\Rendering\Composition\Expressions;
final class FfiRecord extends \System\ValueType
{

	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Expressions\VariantType[]
	 */
	public $Types;
	/**
	 * @field
	 * @var \System\Func_2[System\Collections\Generic\IReadOnlyList_1[Avalonia\Rendering\Composition\Expressions\ExpressionVariant],Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 */
	public $Delegate;

}