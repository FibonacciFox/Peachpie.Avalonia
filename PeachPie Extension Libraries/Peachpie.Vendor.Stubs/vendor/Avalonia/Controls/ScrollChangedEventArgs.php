<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ScreensOverride {
	/**
	 * @param \Avalonia\Vector $extentDelta
	 * @param \Avalonia\Vector $offsetDelta
	 * @param \Avalonia\Vector $viewportDelta
	 */
	#[MethodOverride]public function __construct_1 ($extentDelta, $offsetDelta, $viewportDelta){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \Avalonia\Vector $extentDelta
	 * @param \Avalonia\Vector $offsetDelta
	 * @param \Avalonia\Vector $viewportDelta
	 */
	#[MethodOverride]public function __construct_2 ($routedEvent, $extentDelta, $offsetDelta, $viewportDelta){}
}
class ScrollChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	use ScreensOverride;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $ExtentDelta;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $OffsetDelta;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $ViewportDelta;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Handled;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutedEvent
	 */
	public $RoutedEvent;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 */
	public $Route;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Source;
	/**
	 * @uses ScrollChangedEventArgsOverride::__construct_1 <br>public , args: ($extentDelta, $offsetDelta, $viewportDelta)<br>
	 * @uses ScrollChangedEventArgsOverride::__construct_2 <br>public , args: ($routedEvent, $extentDelta, $offsetDelta, $viewportDelta)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}