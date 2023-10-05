<?php
namespace Avalonia\Interactivity;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RoutedEventMethodsOverride
{
	/**
	 * @return \Avalonia\Interactivity\RoutedEvent_1
	 */
	#[MethodOverride] public static function Register_1($name, $routingStrategy){}
	/**
	 * @return \Avalonia\Interactivity\RoutedEvent_1
	 */
	#[MethodOverride] public static function Register_2($name, $routingStrategy, $ownerType){}
}
/**
 */
class RoutedEvent extends \System\Object
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $EventArgsType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $OwnerType;
	/**
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @property
	 */
	public readonly $RoutingStrategies;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasRaisedSubscriptions;
	/**
	 * @var \System\IObservable_1[System\ValueTuple_2[System\Object,Avalonia\Interactivity\RoutedEventArgs]]
	 * @property
	 */
	public readonly $Raised;
	/**
	 * @var \System\IObservable_1[Avalonia\Interactivity\RoutedEventArgs]
	 * @property
	 */
	public readonly $RouteFinished;
	/**
	 * @return \System\Type
	 */
	public  function get_EventArgsType(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Type
	 */
	public  function get_OwnerType(){}
	/**
	 * @return \Avalonia\Interactivity\RoutingStrategies
	 */
	public  function get_RoutingStrategies(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasRaisedSubscriptions(){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_Raised(){}
	/**
	 * @return \System\IObservable_1
	 */
	public  function get_RouteFinished(){}
	/**
	 * @uses RoutedEventMethodsOverride::Register_1 ($name, $routingStrategy)
	 * @uses RoutedEventMethodsOverride::Register_2 ($name, $routingStrategy, $ownerType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Register(mixed ...$args){}
	/**
	 * @param \System\Type $targetType
	 * @param \System\EventHandler_1 $handler
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean $handledEventsToo
	 * @return \System\IDisposable
	 */
	public  function AddClassHandler($targetType, $handler, $routes, $handledEventsToo){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function InvokeRaised($sender, $e){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function InvokeRouteFinished($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
