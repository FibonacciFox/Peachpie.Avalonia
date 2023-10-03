<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IGridItemProvider
{
	/**
	 */
	public function get_Row();
	/**
	 */
	public function get_Column();
	/**
	 */
	public function get_RowSpan();
	/**
	 */
	public function get_ColumnSpan();
	/**
	 */
	public function get_ContainingGrid();
}
