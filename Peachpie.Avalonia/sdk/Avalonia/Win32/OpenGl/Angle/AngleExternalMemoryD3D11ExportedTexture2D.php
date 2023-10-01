<?php
namespace Avalonia\Win32\OpenGl\Angle;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AngleExternalMemoryD3D11ExportedTexture2DMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	#[MethodOverride] private static function GetHandle_1($texture2D){}
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	#[MethodOverride] public  function GetHandle_2(){}
}
/**
 */
class AngleExternalMemoryD3D11ExportedTexture2D extends \Avalonia\Win32\OpenGl\Angle\AngleExternalMemoryD3D11Texture2D implements 
	\Avalonia\OpenGL\IGlExternalImageTexture,
	\System\IDisposable,
	\Avalonia\OpenGL\IGlExportableExternalImageTexture
{
	/**
	 * @uses AngleExternalMemoryD3D11ExportedTexture2DMethodsOverride::GetHandle_1 ($texture2D)
	 * @uses AngleExternalMemoryD3D11ExportedTexture2DMethodsOverride::GetHandle_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHandle(mixed ...$args){}
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	public  function get_Handle(){}
}
