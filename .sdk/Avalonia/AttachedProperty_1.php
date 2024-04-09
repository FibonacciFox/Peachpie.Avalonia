<?php
namespace Avalonia;
class AttachedProperty_1 extends \Avalonia\StyledProperty_1 implements
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo,
	\Avalonia\IStyledPropertyAccessor
{
	/**
	 * @property
	 * @var \System\Func_2[TValue,System\Boolean]
	 * @since readonly
	 */
	public $ValidateValue;
	/**
	 * @property dublicate
	 * @var \System\IObservable_1[Avalonia\AvaloniaPropertyChangedEventArgs_1[TValue]]|\System\IObservable_1[Avalonia\AvaloniaPropertyChangedEventArgs]
	 */
	public $Changed;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $OwnerType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Inherits;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsAttached;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsDirect;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsReadOnly;
	private function ValidateValue($value){}
	private function get_CanGet(){}
	private function get_CanSet(){}
	private function Get($target){}
	private function Set($target, $value){}
}