<?php
namespace Avalonia\Data\Core\Plugins;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ValidatorMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function SetValue_1($value, $priority){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function SetValue_2($value, $priority){}
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
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnCompleted_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnCompleted_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnError_1($error){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnError_2($error){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnNext_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnNext_2($value){}
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
	#[MethodOverride] protected  function InnerValueChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function InnerValueChanged_2($value){}
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
class Validator extends \Avalonia\Data\Core\Plugins\DataValidationBase implements 
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable,
	\System\IObserver_1
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
	 * @uses ValidatorMethodsOverride::SetValue_1 ($value, $priority)
	 * @uses ValidatorMethodsOverride::SetValue_2 ($value, $priority)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::get_PropertyType_1 ()
	 * @uses ValidatorMethodsOverride::get_PropertyType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PropertyType(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::get_Value_1 ()
	 * @uses ValidatorMethodsOverride::get_Value_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Value(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::OnCompleted_1 ()
	 * @uses ValidatorMethodsOverride::OnCompleted_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnCompleted(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::OnError_1 ($error)
	 * @uses ValidatorMethodsOverride::OnError_2 ($error)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnError(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::OnNext_1 ($value)
	 * @uses ValidatorMethodsOverride::OnNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnNext(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::SubscribeCore_1 ()
	 * @uses ValidatorMethodsOverride::SubscribeCore_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SubscribeCore(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::UnsubscribeCore_1 ()
	 * @uses ValidatorMethodsOverride::UnsubscribeCore_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UnsubscribeCore(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::InnerValueChanged_1 ($value)
	 * @uses ValidatorMethodsOverride::InnerValueChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InnerValueChanged(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::Dispose_1 ()
	 * @uses ValidatorMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::Subscribe_1 ($listener)
	 * @uses ValidatorMethodsOverride::Subscribe_2 ($listener)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Subscribe(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::Unsubscribe_1 ()
	 * @uses ValidatorMethodsOverride::Unsubscribe_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Unsubscribe(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::PublishValue_1 ($value)
	 * @uses ValidatorMethodsOverride::PublishValue_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PublishValue(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::GetType_1 ()
	 * @uses ValidatorMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::MemberwiseClone_1 ()
	 * @uses ValidatorMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::Finalize_1 ()
	 * @uses ValidatorMethodsOverride::Finalize_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Finalize(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::ToString_1 ()
	 * @uses ValidatorMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::Equals_1 ($obj)
	 * @uses ValidatorMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses ValidatorMethodsOverride::GetHashCode_1 ()
	 * @uses ValidatorMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\Object|object $notifyDataErrorInfo
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \System\ComponentModel\DataErrorsChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEvent($notifyDataErrorInfo, $ev, $e){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateBindingNotification($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetReferenceTarget(){}
	/**
	 * @param \System\Collections\Generic\IList_1 $errors
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GenerateException($errors){}
}
