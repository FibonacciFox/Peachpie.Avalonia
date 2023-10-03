<?php
namespace Avalonia\Native;
/**
 */
class AvnAutomationPeerArray extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnAutomationPeerArray
{
	/**
	 * @return \System\UInt32
	 */
	public  function get_Count(){}
	/**
	 * @param \System\UInt32 $index
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function Get($index){}
}
