<?php
namespace Avalonia\X11;
/**
 */
interface IXI2Client
{
	/**
	 */
	public function get_IsEnabled();
	/**
	 */
	public function get_InputRoot();
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 */
	public function ScheduleXI2Input($args);
	/**
	 */
	public function get_MouseDevice();
	/**
	 */
	public function get_TouchDevice();
}
