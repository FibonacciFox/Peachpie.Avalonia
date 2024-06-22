<?php
namespace Avalonia\Controls\Presenters;
class PanelContainerGenerator extends \System\Object implements
	\System\IDisposable
{


	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Refresh(){}
	private function OnItemsChanged($sender, $e){}
	private static function InsertContainer($itemsControl, $children, $item, $index){}
	private function ClearItemsControlLogicalChildren(){}
	/**
	 * @param \Avalonia\Controls\Presenters\ItemsPresenter $presenter
	 */
	public function __construct($presenter){}
}