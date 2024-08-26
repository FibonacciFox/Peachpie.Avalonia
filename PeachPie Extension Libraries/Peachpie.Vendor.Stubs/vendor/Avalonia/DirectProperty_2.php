<?php
namespace Avalonia;
class DirectProperty_2 extends \Avalonia\DirectPropertyBase_1 implements
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo,
	\Avalonia\IDirectPropertyAccessor
{
	/**
	 * @property
	 * @var \System\Func_2[TOwner,TValue]
	 * @since readonly
	 */
	public $Getter;
	/**
	 * @property
	 * @var \System\Action_2[TOwner,TValue]
	 * @since readonly
	 */
	public $Setter;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $Owner;
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
	/**
	 * @param \System\Func_2 $getter [generic: TNewOwner,TValue]
	 * @param \System\Action_2 $setter [generic: TNewOwner,TValue]
	 * @param \TValue $unsetValue
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Boolean|bool $enableDataValidation
	 * @return \Avalonia\DirectProperty_2[TNewOwner,TValue]
	 */
	public function AddOwner($getter, $setter, $unsetValue, $defaultBindingMode, $enableDataValidation){}
	private function GetValue($instance){}
	private function SetValue($instance, $value){}
	private function get_CanGet(){}
	private function get_CanSet(){}
	private function Get($target){}
	private function Set($target, $value){}
}