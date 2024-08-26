<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SelectingItemsControlSelectionAdapterOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnCommit_1 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnCommit_2 ($sender, $e){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnCancel_1 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnCancel_2 ($sender, $e){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Controls\Primitives\SelectingItemsControl $selector
	 */
	#[MethodOverride]public function __construct_2 ($selector){}
}
class SelectingItemsControlSelectionAdapter extends \System\Object implements
	\Avalonia\Controls\Utils\ISelectionAdapter
{
	use SelectingItemsControlSelectionAdapterOverride;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\SelectingItemsControl
	 */
	public $SelectorControl;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $SelectedItem;
	/**
	 * @property
	 * @var \System\Collections\IEnumerable
	 */
	public $ItemsSource;
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\SelectionChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\SelectionChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Commit($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Commit($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Cancel($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Cancel($value){}
	private function ResetScrollViewer(){}
	private function OnSelectorPointerReleased($sender, $e){}
	private function OnSelectionChanged($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	protected function SelectedIndexIncrement(){}
	/**
	 * @return \System\Void|void
	 */
	protected function SelectedIndexDecrement(){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	public function HandleKeyDown($e){}
	/**
	 * @uses SelectingItemsControlSelectionAdapterOverride::OnCommit_1 <br>protected , args: ()<br>
	 * @uses SelectingItemsControlSelectionAdapterOverride::OnCommit_2 <br>private , args: ($sender, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnCommit (\override ...$args){}
	/**
	 * @uses SelectingItemsControlSelectionAdapterOverride::OnCancel_1 <br>protected , args: ()<br>
	 * @uses SelectingItemsControlSelectionAdapterOverride::OnCancel_2 <br>private , args: ($sender, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnCancel (\override ...$args){}
	private function AfterAdapterAction(){}
	/**
	 * @uses SelectingItemsControlSelectionAdapterOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SelectingItemsControlSelectionAdapterOverride::__construct_2 <br>public , args: ($selector)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}