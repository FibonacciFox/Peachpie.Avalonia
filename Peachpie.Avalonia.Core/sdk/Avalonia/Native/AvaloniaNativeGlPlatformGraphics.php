<?php
namespace Avalonia\Native;
/**
 */
class AvaloniaNativeGlPlatformGraphics extends \System\Object implements 
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
	 * @return \System\Boolean
	 */
	public  function get_CanShareContexts(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanCreateContexts(){}
	/**
	 * @return \Avalonia\Native\GlContext
	 */
	protected  function get_SharedContext(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
