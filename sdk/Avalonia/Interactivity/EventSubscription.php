<?php
namespace Avalonia\Interactivity;
/**
 */
class EventSubscription extends \System\ValueType
{
	/**
	 * @var \System\Action_3[System\Delegate,System\Object,Avalonia\Interactivity\RoutedEventArgs]
	 * @property
	 */
	public readonly $InvokeAdapter;
	/**
	 * @var \System\Delegate
	 * @property
	 */
	public readonly $Handler;
	/**
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @property
	 */
	public readonly $Routes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HandledEventsToo;
	/**
	 * @return \System\Action_3
	 */
	public  function get_InvokeAdapter(){}
	/**
	 * @return \System\Delegate
	 */
	public  function get_Handler(){}
	/**
	 * @return \Avalonia\Interactivity\RoutingStrategies
	 */
	public  function get_Routes(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HandledEventsToo(){}
}
