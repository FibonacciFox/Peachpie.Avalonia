<?php
namespace Avalonia\X11;
/**
 */
class XI2Manager extends \System\Object
{
	/**
	 * @param \Avalonia\X11\AvaloniaX11Platform $platform
	 * @return \System\Boolean
	 */
	public  function Init($platform){}
	/**
	 * @param \System\IntPtr $xid
	 * @param \Avalonia\X11\IXI2Client $window
	 * @return \Avalonia\X11\XEventMask
	 */
	public  function AddWindow($xid, $window){}
	/**
	 * @param \System\IntPtr $xid
	 * @return \System\Void|void
	 */
	public  function OnWindowDestroyed($xid){}
	/**
	 * @param \Avalonia\X11\XIEvent* $xev
	 * @return \System\Void|void
	 */
	public  function OnEvent($xev){}
	/**
	 * @param \Avalonia\X11\IXI2Client $client
	 * @param \Avalonia\X11\XIEnterLeaveEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEnterLeaveEvent($client, $ev){}
	/**
	 * @param \Avalonia\X11\IXI2Client $client
	 * @param \Avalonia\X11\ParsedDeviceEvent $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeviceEvent($client, $ev){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
