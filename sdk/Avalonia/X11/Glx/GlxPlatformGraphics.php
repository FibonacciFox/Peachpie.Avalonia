<?php
namespace Avalonia\X11\Glx;
/**
 */
class GlxPlatformGraphics extends \System\Object implements 
	\Avalonia\Platform\IPlatformGraphics
{
	/**
	 * @var \Avalonia\X11\Glx\GlxDisplay
	 * @property
	 */
	public $Display;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanCreateContexts;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanShareContexts;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $UsesSharedContext;
	/**
	 * @return \Avalonia\X11\Glx\GlxDisplay
	 */
	public  function get_Display(){}
	/**
	 * @param \Avalonia\X11\Glx\GlxDisplay $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Display($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanCreateContexts(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanShareContexts(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UsesSharedContext(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateContext(){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public  function GetSharedContext(){}
	/**
	 * @param \Avalonia\X11\X11Info $x11
	 * @param \System\Collections\Generic\IList_1 $glProfiles
	 * @return \Avalonia\X11\Glx\GlxPlatformGraphics
	 */
	public static function TryCreate($x11, $glProfiles){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
