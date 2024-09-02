<?php
namespace Avalonia\Controls\Selection;
class SelectionModelIndexesChangedEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $StartIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Delta;
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $delta
	 */
	public function __construct($startIndex, $delta){}
}