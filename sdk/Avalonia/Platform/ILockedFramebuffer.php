<?php
namespace Avalonia\Platform;
/**
 */
interface ILockedFramebuffer
{
	/**
	 */
	public function get_Address();
	/**
	 */
	public function get_Size();
	/**
	 */
	public function get_RowBytes();
	/**
	 */
	public function get_Dpi();
	/**
	 */
	public function get_Format();
}
