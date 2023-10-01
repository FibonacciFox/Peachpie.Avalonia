<?php
namespace Avalonia\Native;
/**
 */
class Events extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnPlatformThreadingInterfaceEvents
{
	/**
	 * @return \System\Void|void
	 */
	public  function Signaled(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Timer(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReadyForBackgroundProcessing(){}
}
