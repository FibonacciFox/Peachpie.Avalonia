<?php
namespace Avalonia\Rendering\Composition\Animations;
class PropertySetSnapshot extends \System\Object implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionParameterCollection,
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{


	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function GetParameter($name){}
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\IExpressionObject
	 */
	public function GetObjectParameter($name){}
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function GetProperty($name){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $dic [generic: System\String,Avalonia\Rendering\Composition\Animations\PropertySetSnapshot+Value]
	 */
	public function __construct($dic){}
}