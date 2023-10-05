<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaPropertyMethodsOverride
{
	/**
	 * @return \Avalonia\StyledProperty_1
	 */
	#[MethodOverride] public static function Register_1($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce, $enableDataValidation){}
	/**
	 * @return \Avalonia\StyledProperty_1
	 */
	#[MethodOverride] protected static function Register_2($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce, $enableDataValidation, $notifying){}
	/**
	 * @return \Avalonia\AttachedProperty_1
	 */
	#[MethodOverride] public static function RegisterAttached_1($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce){}
	/**
	 * @return \Avalonia\AttachedProperty_1
	 */
	#[MethodOverride] public static function RegisterAttached_2($name, $ownerType, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	#[MethodOverride] public  function GetMetadata_1(){}
	/**
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	#[MethodOverride] public  function GetMetadata_2($type){}
}
/**
 */
class AvaloniaProperty extends \System\Object implements 
	\System\IEquatable_1,
	\Avalonia\Data\Core\IPropertyInfo
{
	/**
	 * @var \System\Object
	 * @field
	 */
	public readonly $UnsetValue;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $OwnerType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Inherits;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsAttached;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsDirect;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsReadOnly;
	/**
	 * @var \System\IObservable_1[Avalonia\AvaloniaPropertyChangedEventArgs]
	 * @property
	 */
	public readonly $Changed;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Type
	 */
	public  function get_PropertyType(){}
	/**
	 * @return \System\Type
	 */
	public  function get_OwnerType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Inherits(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_Inherits($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAttached(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsAttached($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDirect(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsDirect($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsReadOnly($value){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_Changed(){}
	/**
	 * @return \System\Action_2
	 */
	protected  function get_Notifying(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Id(){}
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
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\AvaloniaProperty $a
	 * @param \Avalonia\AvaloniaProperty $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @uses AvaloniaPropertyMethodsOverride::Register_1 ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce, $enableDataValidation)
	 * @uses AvaloniaPropertyMethodsOverride::Register_2 ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce, $enableDataValidation, $notifying)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Register(mixed ...$args){}
	/**
	 * @uses AvaloniaPropertyMethodsOverride::RegisterAttached_1 ($name, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce)
	 * @uses AvaloniaPropertyMethodsOverride::RegisterAttached_2 ($name, $ownerType, $defaultValue, $inherits, $defaultBindingMode, $validate, $coerce)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RegisterAttached(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Func_2 $getter
	 * @param \System\Action_2 $setter
	 * @param \Avalonia\TValue $unsetValue
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Boolean $enableDataValidation
	 * @return \Avalonia\DirectProperty_2
	 */
	public static function RegisterDirect($name, $getter, $setter, $unsetValue, $defaultBindingMode, $enableDataValidation){}
	/**
	 * @return \Avalonia\Data\IndexerDescriptor
	 */
	public  function Bind(){}
	/**
	 * @uses AvaloniaPropertyMethodsOverride::Equals_1 ($obj)
	 * @uses AvaloniaPropertyMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses AvaloniaPropertyMethodsOverride::GetMetadata_1 ()
	 * @uses AvaloniaPropertyMethodsOverride::GetMetadata_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMetadata(mixed ...$args){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function IsValidValue($value){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \Avalonia\PropertyStore\EffectiveValue
	 */
	protected  function CreateEffectiveValue($o){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Void|void
	 */
	protected  function RouteClearValue($o){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Void|void
	 */
	protected  function RouteCoerceDefaultValue($o){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Object|object
	 */
	protected  function RouteGetValue($o){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \System\Object|object
	 */
	protected  function RouteGetBaseValue($o){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	protected  function RouteSetValue($o, $value, $priority){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function RouteSetCurrentValue($o, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\IObservable_1 $source
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	protected  function RouteBind($o, $source, $priority){}
	/**
	 * @param \System\Type $type
	 * @param \Avalonia\AvaloniaPropertyMetadata $metadata
	 * @return \System\Void|void
	 */
	protected  function OverrideMetadata($type, $metadata){}
	/**
	 * @return \System\IObservable_1
	 */
	protected  function GetChanged(){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMetadataWithOverrides($type){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CanGet(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CanSet(){}
	/**
	 * @param \System\Object|object $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Get($target){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Set($target, $value){}
}
