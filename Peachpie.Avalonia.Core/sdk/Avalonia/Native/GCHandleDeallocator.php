<?php
namespace Avalonia\Native;
/**
 */
class GCHandleDeallocator extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnGCHandleDeallocatorCallback
{
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	public  function FreeGCHandle($handle){}
}
