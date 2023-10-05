<?php
namespace Avalonia\Controls;
/**
 */
class ScrollChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $ExtentDelta;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $OffsetDelta;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $ViewportDelta;
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
	 * @return \Avalonia\Vector
	 */
	public  function get_ExtentDelta(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_OffsetDelta(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_ViewportDelta(){}
}
