<?php
namespace Avalonia\OpenGL\Angle;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Win32AngleEglInterfaceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Initialize_1($getProcAddress){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Initialize_2($display, $major, $minor){}
}
/**
 */
class Win32AngleEglInterface extends \Avalonia\OpenGL\Egl\EglInterface
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCreateDeviceANGLEAvailable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReleaseDeviceANGLEAvailable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGetPlatformDisplayExtAvailable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsQueryDisplayAttribExtAvailable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsQueryDeviceAttribExtAvailable;
	/**
	 * @param \System\String|string $proc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EGL_GetProcAddress($proc){}
	/**
	 * @param \System\Int32|int $deviceType
	 * @param \System\IntPtr $nativeDevice
	 * @param \System\Int32[] $attribs
	 * @return \System\IntPtr
	 */
	public  function CreateDeviceANGLE($deviceType, $nativeDevice, $attribs){}
	/**
	 * @param \System\IntPtr $device
	 * @return \System\Void|void
	 */
	public  function ReleaseDeviceANGLE($device){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadAngle(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCreateDeviceANGLEAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReleaseDeviceANGLEAvailable(){}
	/**
	 * @uses Win32AngleEglInterfaceMethodsOverride::Initialize_1 ($getProcAddress)
	 * @uses Win32AngleEglInterfaceMethodsOverride::Initialize_2 ($display, $major, $minor)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
}
