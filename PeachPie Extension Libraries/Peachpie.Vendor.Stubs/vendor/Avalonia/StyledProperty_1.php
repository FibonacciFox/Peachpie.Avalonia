<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StyledProperty_1Override {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \TValue
	 */
	#[MethodOverride]public function GetDefaultValue_1 ($type){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function GetDefaultValue_2 ($type){}
	/**
	 * @deprecated
	 * @param \TValue $defaultValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OverrideDefaultValue_1 ($defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \TValue $defaultValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OverrideDefaultValue_2 ($type, $defaultValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledPropertyMetadata_1 $metadata [generic: TValue]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OverrideMetadata_1 ($metadata){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \Avalonia\StyledPropertyMetadata_1 $metadata [generic: TValue]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OverrideMetadata_2 ($type, $metadata){}
}
class StyledProperty_1 extends \Avalonia\AvaloniaProperty_1 implements
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo,
	\Avalonia\IStyledPropertyAccessor
{
	use StyledProperty_1Override;
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
	/**
	 * @param \Avalonia\StyledPropertyMetadata_1 $metadata [generic: TValue]
	 * @return \Avalonia\StyledProperty_1[TValue]
	 */
	public function AddOwner($metadata){}
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \TValue $baseValue
	 * @return \TValue
	 */
	public function CoerceValue($instance, $baseValue){}
	/**
	 * @uses StyledProperty_1Override::GetDefaultValue_1 <br>public , args: ($type)<br>
	 * @uses StyledProperty_1Override::GetDefaultValue_2 <br>private , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetDefaultValue (\override ...$args){}
	/**
	 * @uses StyledProperty_1Override::OverrideDefaultValue_1 <br>public , args: ($defaultValue)<br>
	 * @uses StyledProperty_1Override::OverrideDefaultValue_2 <br>public , args: ($type, $defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function OverrideDefaultValue (\override ...$args){}
	/**
	 * @uses StyledProperty_1Override::OverrideMetadata_1 <br>public , args: ($metadata)<br>
	 * @uses StyledProperty_1Override::OverrideMetadata_2 <br>public , args: ($type, $metadata)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function OverrideMetadata (\override ...$args){}
	private function ValidateValue($value){}
	private function ShouldSetValue($target, $value, &$converted){}
	private function GetDefaultBoxedValue($type){}
	private function get_CanGet(){}
	private function get_CanSet(){}
	private function Get($target){}
	private function Set($target, $value){}
}