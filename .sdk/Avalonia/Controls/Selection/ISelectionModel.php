<?php
namespace Avalonia\Controls\Selection;
/**
 * @method \System\Void|void add_IndexesChanged($value) [modifier: public]
 * @method \System\Void|void remove_IndexesChanged($value) [modifier: public]
 * @method \System\Void|void add_SelectionChanged($value) [modifier: public]
 * @method \System\Void|void remove_SelectionChanged($value) [modifier: public]
 * @method \System\Void|void add_LostSelection($value) [modifier: public]
 * @method \System\Void|void remove_LostSelection($value) [modifier: public]
 * @method \System\Void|void add_SourceReset($value) [modifier: public]
 * @method \System\Void|void remove_SourceReset($value) [modifier: public]
*/
interface ISelectionModel
{

	/**
	 * @return \System\Void|void
	 */
	public function BeginBatchUpdate();
	/**
	 * @return \System\Void|void
	 */
	public function EndBatchUpdate();
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	public function IsSelected($index);
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function Select($index);
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function Deselect($index);
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @return \System\Void|void
	 */
	public function SelectRange($start, $end);
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @return \System\Void|void
	 */
	public function DeselectRange($start, $end);
	/**
	 * @return \System\Void|void
	 */
	public function SelectAll();
	/**
	 * @return \System\Void|void
	 */
	public function Clear();
}