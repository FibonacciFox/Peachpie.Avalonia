<?php
namespace Avalonia\Native;
/**
 */
class AvnDispatcher extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnDispatcher
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnActionCallback $cb
	 * @return \System\Void|void
	 */
	public  function Post($cb){}
}
