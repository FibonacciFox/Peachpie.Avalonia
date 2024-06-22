<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DirectPropertyBase_1Override {
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyMetadata_1 $metadata [generic: TValue]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OverrideMetadata_1 ($metadata){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \Avalonia\DirectPropertyMetadata_1 $metadata [generic: TValue]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OverrideMetadata_2 ($type, $metadata){}
}
class DirectPropertyBase_1 extends \Avalonia\AvaloniaProperty_1 implements
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo
{
	use DirectPropertyBase_1Override;

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @property duplicate
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
	 * @param \Avalonia\AvaloniaObject $instance
	 * @return \TValue
	 */
	abstract protected function InvokeGetter($instance);
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \Avalonia\Data\BindingValue_1 $value [generic: TValue]
	 * @return \System\Void|void
	 */
	abstract protected function InvokeSetter($instance, $value);
	/**
	 * @param \System\Type $type
	 * @return \TValue
	 */
	public function GetUnsetValue($type){}
	/**
	 * @uses DirectPropertyBase_1Override::OverrideMetadata_1 <br>public , args: ($metadata)<br>
	 * @uses DirectPropertyBase_1Override::OverrideMetadata_2 <br>public , args: ($type, $metadata)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function OverrideMetadata (\override ...$args){}
	private function get_CanGet(){}
	private function get_CanSet(){}
	private function Get($target){}
	private function Set($target, $value){}
}