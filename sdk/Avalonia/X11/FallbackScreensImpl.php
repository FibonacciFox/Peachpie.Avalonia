<?php
namespace Avalonia\X11;
/**
 */
class FallbackScreensImpl extends \System\Object implements 
	\Avalonia\X11\IX11Screens
{
	/**
	 * @var \Avalonia\X11\X11Screen[]
	 * @property
	 */
	public readonly $Screens;
	/**
	 * @return \Avalonia\X11\X11Screen[]
	 */
	public  function get_Screens(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
