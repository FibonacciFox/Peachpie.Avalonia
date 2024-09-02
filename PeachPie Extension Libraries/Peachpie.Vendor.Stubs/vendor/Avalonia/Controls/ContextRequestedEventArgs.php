<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContextMenuOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $pointerEventArgs
	 */
	#[MethodOverride]public function __construct_2 ($pointerEventArgs){}
}
class ContextRequestedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	use ContextMenuOverride;
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
	 * @param \Avalonia\Controls\Control $relativeTo
	 * @param \Avalonia\Point& &$point
	 * @return \System\Boolean|bool
	 */
	public function TryGetPosition($relativeTo, &$point){}
	/**
	 * @uses ContextRequestedEventArgsOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ContextRequestedEventArgsOverride::__construct_2 <br>public , args: ($pointerEventArgs)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}