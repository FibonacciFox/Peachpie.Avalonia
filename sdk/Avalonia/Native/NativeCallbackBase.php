<?php
namespace Avalonia\Native;
/**
 */
class NativeCallbackBase extends \Avalonia\MicroCom\CallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback
{
	/**
	 * @param \System\Exception $e
	 * @return \System\Void|void
	 */
	public  function RaiseException($e){}
}
