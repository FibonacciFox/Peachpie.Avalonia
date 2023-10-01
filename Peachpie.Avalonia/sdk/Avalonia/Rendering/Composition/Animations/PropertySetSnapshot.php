<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class PropertySetSnapshot extends \System\Object implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionParameterCollection,
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function GetParameter($name){}
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\IExpressionObject
	 */
	public  function GetObjectParameter($name){}
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function GetProperty($name){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
