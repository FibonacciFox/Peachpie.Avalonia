<?php
namespace Avalonia;
/**
 */
class X11PlatformOptions extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\X11RenderingMode]
	 * @property
	 */
	public $RenderingMode;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $OverlayPopups;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $UseDBusMenu;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $UseDBusFilePicker;
	/**
	 * @var \System\Nullable_1[System\Boolean]
	 * @property
	 */
	public $EnableIme;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $EnableSessionManagement;
	/**
	 * @var \System\Collections\Generic\IList_1[Avalonia\OpenGL\GlVersion]
	 * @property
	 */
	public $GlProfiles;
	/**
	 * @var \System\Collections\Generic\IList_1[System\String]
	 * @property
	 */
	public $GlxRendererBlacklist;
	/**
	 * @var \System\String
	 * @property
	 */
	public $WmClass;
	/**
	 * @var \System\Nullable_1[System\Boolean]
	 * @property
	 */
	public $EnableMultiTouch;
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_RenderingMode(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_RenderingMode($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_OverlayPopups(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_OverlayPopups($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseDBusMenu(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_UseDBusMenu($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseDBusFilePicker(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_UseDBusFilePicker($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_EnableIme(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_EnableIme($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_EnableSessionManagement(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_EnableSessionManagement($value){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_GlProfiles(){}
	/**
	 * @param \System\Collections\Generic\IList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_GlProfiles($value){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_GlxRendererBlacklist(){}
	/**
	 * @param \System\Collections\Generic\IList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_GlxRendererBlacklist($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_WmClass(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_WmClass($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_EnableMultiTouch(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_EnableMultiTouch($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
