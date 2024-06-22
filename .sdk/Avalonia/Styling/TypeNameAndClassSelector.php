<?php
namespace Avalonia\Styling;
final class TypeNameAndClassSelector extends \Avalonia\Styling\Selector
{

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsConcreteType;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[System\String]
	 * @since readonly
	 */
	public $Classes;
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
	private function BuildSelectorString($owner){}
}