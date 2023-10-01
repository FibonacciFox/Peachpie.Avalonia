<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnStringArray
{
	/**
	 */
	public function ToStringArray();
	/**
	 */
	public function get_Count();
	/**
	 * @param \System\UInt32 $index
	 */
	public function Get($index);
}
