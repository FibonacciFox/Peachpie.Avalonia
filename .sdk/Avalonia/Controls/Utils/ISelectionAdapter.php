<?php
namespace Avalonia\Controls\Utils;
/**
 * @method \System\Void|void add_SelectionChanged($value) [modifier: public]
 * @method \System\Void|void remove_SelectionChanged($value) [modifier: public]
 * @method \System\Void|void add_Commit($value) [modifier: public]
 * @method \System\Void|void remove_Commit($value) [modifier: public]
 * @method \System\Void|void add_Cancel($value) [modifier: public]
 * @method \System\Void|void remove_Cancel($value) [modifier: public]
*/
interface ISelectionAdapter
{

	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	public function HandleKeyDown($e);
}