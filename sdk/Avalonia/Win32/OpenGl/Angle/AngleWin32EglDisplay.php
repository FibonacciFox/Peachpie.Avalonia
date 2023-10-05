<?php
namespace Avalonia\Win32\OpenGl\Angle;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AngleWin32EglDisplayMethodsOverride
{
	/**
	 * @return \Avalonia\OpenGL\Egl\EglSurface
	 */
	#[MethodOverride] public  function WrapDirect3D11Texture_1($handle){}
	/**
	 * @return \Avalonia\OpenGL\Egl\EglSurface
	 */
	#[MethodOverride] public  function WrapDirect3D11Texture_2($handle, $offsetX, $offsetY, $width, $height){}
}
/**
 */
class AngleWin32EglDisplay extends \Avalonia\OpenGL\Egl\EglDisplay implements 
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Win32\AngleOptions+PlatformApi
	 * @property
	 */
	public readonly $PlatformApi;
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
	 * @param \Avalonia\OpenGL\Egl\EglInterface $egl
	 * @return \Avalonia\Win32\OpenGl\Angle\AngleWin32EglDisplay
	 */
	public static function CreateD3D9Display($egl){}
	/**
	 * @param \Avalonia\OpenGL\Egl\EglInterface $egl
	 * @return \Avalonia\Win32\OpenGl\Angle\AngleWin32EglDisplay
	 */
	public static function CreateSharedD3D11Display($egl){}
	/**
	 * @param \Avalonia\OpenGL\Angle\Win32AngleEglInterface $egl
	 * @param \System\Boolean $preferDiscreteAdapter
	 * @return \Avalonia\Win32\OpenGl\Angle\AngleWin32EglDisplay
	 */
	public static function CreateD3D11Display($egl, $preferDiscreteAdapter){}
	/**
	 * @return \Avalonia\Win32\PlatformApi
	 */
	public  function get_PlatformApi(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetDirect3DDevice(){}
	/**
	 * @uses AngleWin32EglDisplayMethodsOverride::WrapDirect3D11Texture_1 ($handle)
	 * @uses AngleWin32EglDisplayMethodsOverride::WrapDirect3D11Texture_2 ($handle, $offsetX, $offsetY, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WrapDirect3D11Texture(mixed ...$args){}
}
