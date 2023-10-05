<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
class EglDisplay extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $SupportsSharing;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Config;
	/**
	 * @var \Avalonia\OpenGL\Egl\EglInterface
	 * @property
	 */
	public readonly $EglInterface;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLost;
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsSharing(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Config(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_SingleContext(){}
	/**
	 * @return \Avalonia\OpenGL\Egl\EglInterface
	 */
	public  function get_EglInterface(){}
	/**
	 * @param \Avalonia\OpenGL\Egl\EglContextOptions $options
	 * @return \Avalonia\OpenGL\Egl\EglContext
	 */
	public  function CreateContext($options){}
	/**
	 * @param \System\IntPtr $window
	 * @return \Avalonia\OpenGL\Egl\EglSurface
	 */
	public  function CreateWindowSurface($window){}
	/**
	 * @param \System\Int32|int $bufferType
	 * @param \System\IntPtr $handle
	 * @param \System\Int32[] $attribs
	 * @return \Avalonia\OpenGL\Egl\EglSurface
	 */
	public  function CreatePBufferFromClientBuffer($bufferType, $handle, $attribs){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_DisplayLockIsSharedWithContexts(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_ContextSharedSyncRoot(){}
	/**
	 * @param \Avalonia\OpenGL\Egl\EglContext $context
	 * @return \System\Void|void
	 */
	protected  function OnContextLost($context){}
	/**
	 * @param \Avalonia\OpenGL\Egl\EglContext $context
	 * @return \System\Void|void
	 */
	protected  function OnContextDisposed($context){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function Lock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
