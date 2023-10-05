<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
class EglDisplayCreationOptions extends \Avalonia\OpenGL\Egl\EglDisplayOptions
{
	/**
	 * @var \System\Nullable_1[System\Int32]
	 * @property
	 */
	public $PlatformType;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $PlatformDisplay;
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public $PlatformDisplayAttrs;
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
	 * @return \System\Nullable_1
	 */
	public  function get_PlatformType(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PlatformType($value){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_PlatformDisplay(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_PlatformDisplay($value){}
	/**
	 * @return \System\Int32[]
	 */
	public  function get_PlatformDisplayAttrs(){}
	/**
	 * @param \System\Int32[] $value
	 * @return \System\Void|void
	 */
	public  function set_PlatformDisplayAttrs($value){}
}
