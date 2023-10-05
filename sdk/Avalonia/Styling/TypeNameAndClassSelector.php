<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypeNameAndClassSelectorMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1($owner){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2(){}
}
/**
 */
class TypeNameAndClassSelector extends \Avalonia\Styling\Selector
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsConcreteType;
	/**
	 * @var \System\Collections\Generic\IList_1[System\String]
	 * @property
	 */
	public readonly $Classes;
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Type $targetType
	 * @return \Avalonia\Styling\TypeNameAndClassSelector
	 */
	public static function OfType($previous, $targetType){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Type $targetType
	 * @return \Avalonia\Styling\TypeNameAndClassSelector
	 */
	public static function Is($previous, $targetType){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\String|string $name
	 * @return \Avalonia\Styling\TypeNameAndClassSelector
	 */
	public static function ForName($previous, $name){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\String|string $className
	 * @return \Avalonia\Styling\TypeNameAndClassSelector
	 */
	public static function ForClass($previous, $className){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsConcreteType(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsConcreteType($value){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_Classes(){}
	/**
	 * @uses TypeNameAndClassSelectorMethodsOverride::ToString_1 ($owner)
	 * @uses TypeNameAndClassSelectorMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \Avalonia\Styling\Style $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BuildSelectorString($owner){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\Styling\IStyle $parent
	 * @param \System\Boolean $subscribe
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	protected  function Match($control, $parent, $subscribe){}
}
