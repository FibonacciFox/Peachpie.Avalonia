<?php
namespace Avalonia\Controls\Selection;
/**
 */
class SelectionModelIndexesChangedEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $StartIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Delta;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_StartIndex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Delta(){}
}
