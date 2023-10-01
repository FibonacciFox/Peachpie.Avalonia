<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnNativeControlHost
{
	/**
	 * @param \System\IntPtr $parent
	 */
	public function CreateDefaultChild($parent);
	/**
	 */
	public function CreateAttachment();
	/**
	 * @param \System\IntPtr $child
	 */
	public function DestroyDefaultChild($child);
}
