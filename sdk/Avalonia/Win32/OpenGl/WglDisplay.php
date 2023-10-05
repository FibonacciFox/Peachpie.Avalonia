<?php
namespace Avalonia\Win32\OpenGl;
/**
 */
class WglDisplay extends \System\Object
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $OpenGl32Handle;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Initialize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeCore(){}
	/**
	 * @param \System\Int32|int $source
	 * @param \System\Int32|int $type
	 * @param \System\Int32|int $id
	 * @param \System\Int32|int $severity
	 * @param \System\Int32|int $len
	 * @param \System\IntPtr $message
	 * @param \System\IntPtr $userparam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DebugCallback($source, $type, $id, $severity, $len, $message, $userparam){}
	/**
	 * @param \Avalonia\OpenGL\GlVersion[] $versions
	 * @param \Avalonia\OpenGL\IGlContext $share
	 * @return \Avalonia\Win32\OpenGl\WglContext
	 */
	public static function CreateContext($versions, $share){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
