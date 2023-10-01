<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IGridProvider
{
	/**
	 * @param \System\Int32|int $row
	 * @param \System\Int32|int $column
	 */
	public function GetItem($row, $column);
	/**
	 */
	public function get_RowCount();
	/**
	 */
	public function get_ColumnCount();
}
