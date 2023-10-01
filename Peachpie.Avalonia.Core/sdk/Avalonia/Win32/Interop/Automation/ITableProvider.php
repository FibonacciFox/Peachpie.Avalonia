<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface ITableProvider
{
	/**
	 */
	public function GetRowHeaders();
	/**
	 */
	public function GetColumnHeaders();
	/**
	 */
	public function get_RowOrColumnMajor();
}
