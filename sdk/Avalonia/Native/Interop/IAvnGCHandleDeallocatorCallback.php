<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnGCHandleDeallocatorCallback
{
	/**
	 * @param \System\IntPtr $handle
	 */
	public function FreeGCHandle($handle);
}
