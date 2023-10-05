<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
class EglContextOptions extends \System\Object
{
	/**
	 * @var \Avalonia\OpenGL\Egl\EglContext
	 * @property
	 */
	public $ShareWith;
	/**
	 * @var \Avalonia\OpenGL\Egl\EglSurface
	 * @property
	 */
	public $OffscreenSurface;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $DisposeCallback;
	/**
	 * @var \System\Collections\Generic\Dictionary_2[System\Type,System\Func_2[Avalonia\OpenGL\Egl\EglContext,System\Object]]
	 * @property
	 */
	public $ExtraFeatures;
	/**
	 * @return \Avalonia\OpenGL\Egl\EglContext
	 */
	public  function get_ShareWith(){}
	/**
	 * @param \Avalonia\OpenGL\Egl\EglContext $value
	 * @return \System\Void|void
	 */
	public  function set_ShareWith($value){}
	/**
	 * @return \Avalonia\OpenGL\Egl\EglSurface
	 */
	public  function get_OffscreenSurface(){}
	/**
	 * @param \Avalonia\OpenGL\Egl\EglSurface $value
	 * @return \System\Void|void
	 */
	public  function set_OffscreenSurface($value){}
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
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	public  function get_ExtraFeatures(){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $value
	 * @return \System\Void|void
	 */
	public  function set_ExtraFeatures($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
