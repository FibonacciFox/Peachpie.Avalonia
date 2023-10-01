<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FloatingResourceObservableMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function PublishNext_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PublishNext_2($value){}
}
/**
 */
class FloatingResourceObservable extends \Avalonia\Reactive\LightweightObservableBase_1 implements 
	\System\IObservable_1
{
	/**
	 * @uses FloatingResourceObservableMethodsOverride::PublishNext_1 ()
	 * @uses FloatingResourceObservableMethodsOverride::PublishNext_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PublishNext(mixed ...$args){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OwnerChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ActualThemeVariantChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResourcesChanged($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValue(){}
}
