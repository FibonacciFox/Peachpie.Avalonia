<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIResource
{
	/**
	 */
	public function get_SharedHandle();
	/**
	 */
	public function get_Usage();
	/**
	 * @param \System\UInt16 $EvictionPriority
	 */
	public function SetEvictionPriority($EvictionPriority);
	/**
	 */
	public function get_EvictionPriority();
}
