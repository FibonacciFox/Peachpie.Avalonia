<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnGlDisplay
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnGlContext $share
	 */
	public function CreateContext($share);
	/**
	 */
	public function LegacyClearCurrentContext();
	/**
	 * @param \System\IntPtr $native
	 */
	public function WrapContext($native);
	/**
	 * @param \System\String|string $proc
	 */
	public function GetProcAddress($proc);
}
