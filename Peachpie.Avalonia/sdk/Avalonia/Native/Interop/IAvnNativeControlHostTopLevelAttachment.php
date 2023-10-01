<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnNativeControlHostTopLevelAttachment
{
	/**
	 */
	public function get_ParentHandle();
	/**
	 * @param \System\IntPtr $child
	 */
	public function InitializeWithChildHandle($child);
	/**
	 * @param \Avalonia\Native\Interop\IAvnNativeControlHost $host
	 */
	public function AttachTo($host);
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @param \System\Single $width
	 * @param \System\Single $height
	 */
	public function ShowInBounds($x, $y, $width, $height);
	/**
	 * @param \System\Single $width
	 * @param \System\Single $height
	 */
	public function HideWithSize($width, $height);
	/**
	 */
	public function ReleaseChild();
}
