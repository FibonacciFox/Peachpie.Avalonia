<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaObjectExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetObservable_1 ($o, $property){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetObservable_2 ($o, $property){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: TSource]
	 * @param \System\Func_2 $converter [generic: TSource,TResult]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetObservable_3 ($o, $property, $converter){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Func_2 $converter [generic: System\Object,TResult]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetObservable_4 ($o, $property, $converter){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetBindingObservable_1 ($o, $property){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Func_2 $converter [generic: System\Object,TResult]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetBindingObservable_2 ($o, $property, $converter){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetBindingObservable_3 ($o, $property){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: TSource]
	 * @param \System\Func_2 $converter [generic: TSource,TResult]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetBindingObservable_4 ($o, $property, $converter){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: Avalonia\Data\BindingValue_1[T]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function Bind_1 ($target, $property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: T]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function Bind_2 ($target, $property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\IBinding $binding
	 * @param \System\Object|object $anchor
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function Bind_3 ($target, $property, $binding, $anchor){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function GetBaseValue_1 ($target, $property){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @return \Avalonia\Data\Optional_1
	 */
	#[MethodOverride]public static function GetBaseValue_2 ($target, $property){}
	/**
	 * @deprecated
	 * @param \System\IObservable_1 $observable [generic: Avalonia\AvaloniaPropertyChangedEventArgs]
	 * @param \System\Action_2 $action [generic: TTarget,Avalonia\AvaloniaPropertyChangedEventArgs]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function AddClassHandler_1 ($observable, $action){}
	/**
	 * @deprecated
	 * @param \System\IObservable_1 $observable [generic: Avalonia\AvaloniaPropertyChangedEventArgs_1[TValue]
	 * @param \System\Action_2 $action [generic: TTarget,Avalonia\AvaloniaPropertyChangedEventArgs_1[TValue]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function AddClassHandler_2 ($observable, $action){}
}
class AvaloniaObjectExtensions extends \System\Object
{
	use AvaloniaObjectExtensionsOverride;


	/**
	 * @param \System\IObservable_1 $source [generic: T]
	 * @return \Avalonia\Data\IBinding
	 */
	public static function ToBinding($source){}
	/**
	 * @uses AvaloniaObjectExtensionsOverride::GetObservable_1 <br>public , args: ($o, $property)<br>
	 * @uses AvaloniaObjectExtensionsOverride::GetObservable_2 <br>public , args: ($o, $property)<br>
	 * @uses AvaloniaObjectExtensionsOverride::GetObservable_3 <br>public , args: ($o, $property, $converter)<br>
	 * @uses AvaloniaObjectExtensionsOverride::GetObservable_4 <br>public , args: ($o, $property, $converter)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IObservable_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetObservable (\override ...$args){}
	/**
	 * @uses AvaloniaObjectExtensionsOverride::GetBindingObservable_1 <br>public , args: ($o, $property)<br>
	 * @uses AvaloniaObjectExtensionsOverride::GetBindingObservable_2 <br>public , args: ($o, $property, $converter)<br>
	 * @uses AvaloniaObjectExtensionsOverride::GetBindingObservable_3 <br>public , args: ($o, $property)<br>
	 * @uses AvaloniaObjectExtensionsOverride::GetBindingObservable_4 <br>public , args: ($o, $property, $converter)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IObservable_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetBindingObservable (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\IObservable_1[Avalonia\AvaloniaPropertyChangedEventArgs]
	 */
	public static function GetPropertyChangedObservable($o, $property){}
	/**
	 * @uses AvaloniaObjectExtensionsOverride::Bind_1 <br>public , args: ($target, $property, $source, $priority)<br>
	 * @uses AvaloniaObjectExtensionsOverride::Bind_2 <br>public , args: ($target, $property, $source, $priority)<br>
	 * @uses AvaloniaObjectExtensionsOverride::Bind_3 <br>public , args: ($target, $property, $binding, $anchor)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverridePublic]function Bind (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @return \T|object
	 */
	public static function GetValue($target, $property){}
	/**
	 * @uses AvaloniaObjectExtensionsOverride::GetBaseValue_1 <br>public , args: ($target, $property)<br>
	 * @uses AvaloniaObjectExtensionsOverride::GetBaseValue_2 <br>public , args: ($target, $property)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\Avalonia\Data\Optional_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetBaseValue (\override ...$args){}
	/**
	 * @uses AvaloniaObjectExtensionsOverride::AddClassHandler_1 <br>public , args: ($observable, $action)<br>
	 * @uses AvaloniaObjectExtensionsOverride::AddClassHandler_2 <br>public , args: ($observable, $action)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverridePublic]function AddClassHandler (\override ...$args){}
}