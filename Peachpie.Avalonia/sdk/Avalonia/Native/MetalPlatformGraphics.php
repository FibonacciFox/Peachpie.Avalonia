<?php
namespace Avalonia\Native;
/**
 */
class MetalPlatformGraphics extends \System\Object implements 
	\Avalonia\Platform\IPlatformGraphics
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_UsesSharedContext(){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public  function CreateContext(){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public  function GetSharedContext(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
