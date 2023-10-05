<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
class EglDisplayOptions extends \System\Object
{
	/**
	 * @var \Avalonia\OpenGL\Egl\EglInterface
	 * @property
	 */
	public $Egl;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $SupportsContextSharing;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $SupportsMultipleContexts;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ContextLossIsDisplayLoss;
	/**
	 * @var \System\Func_1[System\Boolean]
	 * @property
	 */
	public $DeviceLostCheckCallback;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $DisposeCallback;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[Avalonia\OpenGL\GlVersion]
	 * @property
	 */
	public $GlVersions;
	/**
	 * @return \Avalonia\OpenGL\Egl\EglInterface
	 */
	public  function get_Egl(){}
	/**
	 * @param \Avalonia\OpenGL\Egl\EglInterface $value
	 * @return \System\Void|void
	 */
	public  function set_Egl($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsContextSharing(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_SupportsContextSharing($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsMultipleContexts(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_SupportsMultipleContexts($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ContextLossIsDisplayLoss(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ContextLossIsDisplayLoss($value){}
	/**
	 * @return \System\Func_1
	 */
	public  function get_DeviceLostCheckCallback(){}
	/**
	 * @param \System\Func_1 $value
	 * @return \System\Void|void
	 */
	public  function set_DeviceLostCheckCallback($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_DisposeCallback(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_DisposeCallback($value){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_GlVersions(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_GlVersions($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
