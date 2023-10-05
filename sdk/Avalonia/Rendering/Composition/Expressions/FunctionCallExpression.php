<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class FunctionCallExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Rendering\Composition\Expressions\Expression]
	 * @property
	 */
	public readonly $Parameters;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Parameters(){}
}
