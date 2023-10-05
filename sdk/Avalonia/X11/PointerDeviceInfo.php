<?php
namespace Avalonia\X11;
/**
 */
class PointerDeviceInfo extends \Avalonia\X11\DeviceInfo
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \Avalonia\X11\XIValuatorClassInfo[]
	 * @property
	 */
	public readonly $Valuators;
	/**
	 * @var \Avalonia\X11\XIScrollClassInfo[]
	 * @property
	 */
	public readonly $Scrollers;
	/**
	 * @param \Avalonia\X11\ParsedDeviceEvent $ev
	 * @return \System\Boolean
	 */
	public  function HasScroll($ev){}
	/**
	 * @param \Avalonia\X11\ParsedDeviceEvent $ev
	 * @return \System\Boolean
	 */
	public  function HasMotion($ev){}
}
