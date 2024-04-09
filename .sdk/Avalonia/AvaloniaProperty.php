<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaPropertyOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \TValue $defaultValue
	 * @param \System\Boolean|bool $inherits
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Func_2 $validate [generic: TValue,System\Boolean]
	 * @param \System\Func_3 $coerce [generic: Avalonia\AvaloniaObject,TValue,TValue]
	 * @param \System\Boolean|bool $enableDataValidation
	 * @return \Avalonia\StyledProperty_1
	 */
	#[MethodOverride]public static function Register_1 ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce, $enableDataValidation){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \TValue $defaultValue
	 * @param \System\Boolean|bool $inherits
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Func_2 $validate [generic: TValue,System\Boolean]
	 * @param \System\Func_3 $coerce [generic: Avalonia\AvaloniaObject,TValue,TValue]
	 * @param \System\Boolean|bool $enableDataValidation
	 * @param \System\Action_2 $notifying [generic: Avalonia\AvaloniaObject,System\Boolean]
	 * @return \Avalonia\StyledProperty_1
	 */
	#[MethodOverride]protected static function Register_2 ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce, $enableDataValidation, $notifying){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \TValue $defaultValue
	 * @param \System\Boolean|bool $inherits
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Func_2 $validate [generic: TValue,System\Boolean]
	 * @param \System\Func_3 $coerce [generic: Avalonia\AvaloniaObject,TValue,TValue]
	 * @return \Avalonia\AttachedProperty_1
	 */
	#[MethodOverride]public static function RegisterAttached_1 ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Type $ownerType
	 * @param \TValue $defaultValue
	 * @param \System\Boolean|bool $inherits
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Func_2 $validate [generic: TValue,System\Boolean]
	 * @param \System\Func_3 $coerce [generic: Avalonia\AvaloniaObject,TValue,TValue]
	 * @return \Avalonia\AttachedProperty_1
	 */
	#[MethodOverride]public static function RegisterAttached_2 ($name, $ownerType, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce){}
	/**
	 * @deprecated
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	#[MethodOverride]public function GetMetadata_1 (){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	#[MethodOverride]public function GetMetadata_2 ($type){}
}
class AvaloniaProperty extends \System\Object implements
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo
{
	use AvaloniaPropertyOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	public static $UnsetValue;
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
	 * @property
	 * @var \System\IObservable_1[Avalonia\AvaloniaPropertyChangedEventArgs]
	 * @since readonly
	 */
	public $Changed;
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public static function op_LogicalNot($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public static function op_OnesComplement($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $a
	 * @param \Avalonia\AvaloniaProperty $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\AvaloniaProperty $a
	 * @param \Avalonia\AvaloniaProperty $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @uses AvaloniaPropertyOverride::Register_1 <br>public , args: ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce, $enableDataValidation)<br>
	 * @uses AvaloniaPropertyOverride::Register_2 <br>protected , args: ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce, $enableDataValidation, $notifying)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\StyledProperty_1|mixed|\override
	 */
	#[MethodOverridePublic]function Register (\override ...$args){}
	/**
	 * @uses AvaloniaPropertyOverride::RegisterAttached_1 <br>public , args: ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce)<br>
	 * @uses AvaloniaPropertyOverride::RegisterAttached_2 <br>public , args: ($name, $ownerType, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\AttachedProperty_1|mixed|\override
	 */
	#[MethodOverridePublic]function RegisterAttached (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Func_2 $getter [generic: TOwner,TValue]
	 * @param \System\Action_2 $setter [generic: TOwner,TValue]
	 * @param \TValue $unsetValue
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Boolean|bool $enableDataValidation
	 * @return \Avalonia\DirectProperty_2[TOwner,TValue]
	 */
	public static function RegisterDirect($name, $getter, $setter, $unsetValue, $defaultBindingMode, $enableDataValidation){}
	/**
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public function Bind(){}
	/**
	 * @uses AvaloniaPropertyOverride::GetMetadata_1 <br>public , args: ()<br>
	 * @uses AvaloniaPropertyOverride::GetMetadata_2 <br>public , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\AvaloniaPropertyMetadata|mixed|\override
	 */
	#[MethodOverridePublic]function GetMetadata (\override ...$args){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	public function IsValidValue($value){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \Avalonia\PropertyStore\EffectiveValue
	 */
	abstract protected function CreateEffectiveValue($o);
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Void|void
	 */
	abstract protected function RouteClearValue($o);
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Void|void
	 */
	abstract protected function RouteCoerceDefaultValue($o);
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Object|object
	 */
	abstract protected function RouteGetValue($o);
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Object|object
	 */
	abstract protected function RouteGetBaseValue($o);
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	abstract protected function RouteSetValue($o, $value, $priority);
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	abstract protected function RouteSetCurrentValue($o, $value);
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	abstract protected function RouteBind($o, $source, $priority);
	/**
	 * @param \System\Type $type
	 * @param \Avalonia\AvaloniaPropertyMetadata $metadata
	 * @return \System\Void|void
	 */
	protected function OverrideMetadata($type, $metadata){}
	/**
	 * @return \System\IObservable_1[Avalonia\AvaloniaPropertyChangedEventArgs]
	 */
	abstract protected function GetChanged();
	private function GetMetadataWithOverrides($type){}
	private function get_CanGet(){}
	private function get_CanSet(){}
	private function Get($target){}
	private function Set($target, $value){}
}