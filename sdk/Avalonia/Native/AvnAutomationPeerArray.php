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
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDestroyed;
	/**
	 * @var \MicroCom\Runtime\MicroComShadow
	 * @property
	 */
	public $Shadow;
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
