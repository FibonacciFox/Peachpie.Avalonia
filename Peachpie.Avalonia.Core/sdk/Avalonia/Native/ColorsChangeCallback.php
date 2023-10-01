<?php
namespace Avalonia\Native;
/**
 */
class ColorsChangeCallback extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnActionCallback
{
	/**
	 * @return \System\Void|void
	 */
	public  function Run(){}
}
