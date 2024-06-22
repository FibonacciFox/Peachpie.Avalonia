<?php
namespace Avalonia\Controls\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DefaultMenuInteractionHandlerOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function KeyDown_1 ($sender, $e){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function KeyDown_2 ($item, $e){}
	/**
	 * @param \System\Boolean|bool $isContextMenu
	 */
	#[MethodOverride]public function __construct_1 ($isContextMenu){}
	/**
	 * @param \System\Boolean|bool $isContextMenu
	 * @param \Avalonia\Input\IInputManager $inputManager
	 * @param \System\Action_2 $delayRun [generic: System\Action,System\TimeSpan]
	 */
	#[MethodOverride]public function __construct_2 ($isContextMenu, $inputManager, $delayRun){}
}
class DefaultMenuInteractionHandler extends \System\Object implements
	\Avalonia\Controls\Platform\IMenuInteractionHandler
{
	use DefaultMenuInteractionHandlerOverride;

	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $MenuShowDelay;
	/**
	 * @param \Avalonia\Controls\MenuBase $menu
	 * @return \System\Void|void
	 */
	public function Attach($menu){}
	/**
	 * @param \Avalonia\Controls\MenuBase $menu
	 * @return \System\Void|void
	 */
	public function Detach($menu){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\GotFocusEventArgs $e
	 * @return \System\Void|void
	 */
	protected function GotFocus($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function LostFocus($sender, $e){}
	/**
	 * @uses DefaultMenuInteractionHandlerOverride::KeyDown_1 <br>protected , args: ($sender, $e)<br>
	 * @uses DefaultMenuInteractionHandlerOverride::KeyDown_2 <br>protected , args: ($item, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function KeyDown (\override ...$args){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function AccessKeyPressed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function PointerEntered($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected function PointerMoved($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function PointerExited($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function PointerPressed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function PointerReleased($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function MenuOpened($sender, $e){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	protected function RawInput($e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function RootPointerPressed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected function WindowDeactivated($sender, $e){}
	/**
	 * @param \Avalonia\StyledElement $item
	 * @return \Avalonia\Controls\MenuItem
	 */
	protected static function GetMenuItem($item){}
	/**
	 * @param \Avalonia\Controls\IMenu $menu
	 * @return \System\Void|void
	 */
	protected function AttachCore($menu){}
	/**
	 * @param \Avalonia\Controls\IMenu $menu
	 * @return \System\Void|void
	 */
	protected function DetachCore($menu){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected function Click($item){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected function CloseMenu($item){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected function CloseWithDelay($item){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @param \System\Boolean|bool $selectFirst
	 * @return \System\Void|void
	 */
	protected function Open($item, $selectFirst){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected function OpenWithDelay($item){}
	/**
	 * @param \Avalonia\Controls\IMenuItem $item
	 * @return \System\Void|void
	 */
	protected function SelectItemAndAncestors($item){}
	/**
	 * @param \Avalonia\StyledElement $item
	 * @return \Avalonia\Controls\IMenuItem
	 */
	protected static function GetMenuItemCore($item){}
	private function TopLevelLostPlatformFocus(){}
	private static function DefaultDelayRun($action, $timeSpan){}
	/**
	 * @uses DefaultMenuInteractionHandlerOverride::__construct_1 <br>public , args: ($isContextMenu)<br>
	 * @uses DefaultMenuInteractionHandlerOverride::__construct_2 <br>public , args: ($isContextMenu, $inputManager, $delayRun)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}