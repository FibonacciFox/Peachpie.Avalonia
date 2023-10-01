<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionGeometry
{
	/**
	 */
	public function get_TrimEnd();
	/**
	 * @param \System\Single $value
	 */
	public function SetTrimEnd($value);
	/**
	 */
	public function get_TrimOffset();
	/**
	 * @param \System\Single $value
	 */
	public function SetTrimOffset($value);
	/**
	 */
	public function get_TrimStart();
	/**
	 * @param \System\Single $value
	 */
	public function SetTrimStart($value);
}
