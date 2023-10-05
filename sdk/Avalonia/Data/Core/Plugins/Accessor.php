<?php
namespace Avalonia\Data\Core\Plugins;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AccessorMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function get_PropertyType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function get_PropertyType_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Value_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Value_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function SetValue_1($value, $priority){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function SetValue_2($value, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SubscribeCore_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SubscribeCore_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function UnsubscribeCore_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function UnsubscribeCore_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Subscribe_1($listener){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Subscribe_2($listener){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Unsubscribe_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Unsubscribe_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishValue_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishValue_2($value){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Finalize_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Finalize_2(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
}
/**
 */
class Accessor extends \Avalonia\Data\Core\Plugins\PropertyAccessorBase implements 
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @uses AccessorMethodsOverride::get_PropertyType_1 ()
	 * @uses AccessorMethodsOverride::get_PropertyType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PropertyType(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::get_Value_1 ()
	 * @uses AccessorMethodsOverride::get_Value_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Value(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::SetValue_1 ($value, $priority)
	 * @uses AccessorMethodsOverride::SetValue_2 ($value, $priority)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @param \System\Object|object $notifyPropertyChanged
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEvent($notifyPropertyChanged, $ev, $e){}
	/**
	 * @uses AccessorMethodsOverride::SubscribeCore_1 ()
	 * @uses AccessorMethodsOverride::SubscribeCore_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SubscribeCore(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::UnsubscribeCore_1 ()
	 * @uses AccessorMethodsOverride::UnsubscribeCore_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UnsubscribeCore(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetReferenceTarget(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SendCurrentValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SubscribeToChanges(){}
	/**
	 * @uses AccessorMethodsOverride::Dispose_1 ()
	 * @uses AccessorMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::Subscribe_1 ($listener)
	 * @uses AccessorMethodsOverride::Subscribe_2 ($listener)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Subscribe(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::Unsubscribe_1 ()
	 * @uses AccessorMethodsOverride::Unsubscribe_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Unsubscribe(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::PublishValue_1 ($value)
	 * @uses AccessorMethodsOverride::PublishValue_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PublishValue(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::GetType_1 ()
	 * @uses AccessorMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::MemberwiseClone_1 ()
	 * @uses AccessorMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::Finalize_1 ()
	 * @uses AccessorMethodsOverride::Finalize_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Finalize(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::ToString_1 ()
	 * @uses AccessorMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::Equals_1 ($obj)
	 * @uses AccessorMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses AccessorMethodsOverride::GetHashCode_1 ()
	 * @uses AccessorMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
