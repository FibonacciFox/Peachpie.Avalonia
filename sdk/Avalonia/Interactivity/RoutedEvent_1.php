<?php
namespace Avalonia\Interactivity;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RoutedEvent_1MethodsOverride
{
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function AddClassHandler_1($handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function AddClassHandler_2($targetType, $handler, $routes, $handledEventsToo){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class RoutedEvent_1 extends \Avalonia\Interactivity\RoutedEvent
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
	 * @uses RoutedEvent_1MethodsOverride::AddClassHandler_1 ($handler, $routes, $handledEventsToo)
	 * @uses RoutedEvent_1MethodsOverride::AddClassHandler_2 ($targetType, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddClassHandler(mixed ...$args){}
}
