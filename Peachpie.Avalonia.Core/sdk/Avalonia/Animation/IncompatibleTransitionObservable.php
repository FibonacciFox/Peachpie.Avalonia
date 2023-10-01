<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IncompatibleTransitionObservableMethodsOverride
{
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	#[MethodOverride] protected  function ProduceValue_1($progress){}
	/**
	 * @return \Avalonia\Media\IEffect
	 */
	#[MethodOverride] protected  function ProduceValue_2($progress){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Subscribed_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Subscribed_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Unsubscribed_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Unsubscribed_2(){}
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
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Subscribe_1($observer){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Subscribe_2($observer){}
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
	#[MethodOverride] protected  function PublishNext_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishNext_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishCompleted_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishCompleted_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishError_1($error){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishError_2($error){}
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
class IncompatibleTransitionObservable extends \Avalonia\Animation\TransitionObservableBase_1 implements 
	\System\IObservable_1,
	\System\IDisposable,
	\System\IObserver_1
{
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::ProduceValue_1 ($progress)
	 * @uses IncompatibleTransitionObservableMethodsOverride::ProduceValue_2 ($progress)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ProduceValue(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::Subscribed_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::Subscribed_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Subscribed(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::Unsubscribed_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::Unsubscribed_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Unsubscribed(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::OnCompleted_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::OnCompleted_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnCompleted(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::OnError_1 ($error)
	 * @uses IncompatibleTransitionObservableMethodsOverride::OnError_2 ($error)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnError(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::OnNext_1 ($value)
	 * @uses IncompatibleTransitionObservableMethodsOverride::OnNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnNext(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::Subscribe_1 ($observer)
	 * @uses IncompatibleTransitionObservableMethodsOverride::Subscribe_2 ($observer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Subscribe(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::Dispose_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::PublishNext_1 ($value)
	 * @uses IncompatibleTransitionObservableMethodsOverride::PublishNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PublishNext(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::PublishCompleted_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::PublishCompleted_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PublishCompleted(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::PublishError_1 ($error)
	 * @uses IncompatibleTransitionObservableMethodsOverride::PublishError_2 ($error)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PublishError(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::GetType_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::MemberwiseClone_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::Finalize_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::Finalize_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Finalize(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::ToString_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::Equals_1 ($obj)
	 * @uses IncompatibleTransitionObservableMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses IncompatibleTransitionObservableMethodsOverride::GetHashCode_1 ()
	 * @uses IncompatibleTransitionObservableMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
