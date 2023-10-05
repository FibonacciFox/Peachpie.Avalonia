<?php
namespace Avalonia\Controls;
/**
 */
class RefreshRequestedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Handled;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent
	 * @property
	 */
	public $RoutedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @property
	 */
	public $Route;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Source;
	/**
	 * @return \Avalonia\Controls\RefreshCompletionDeferral
	 */
	public  function GetDeferral(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function IncrementCount(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function DecrementCount(){}
}
