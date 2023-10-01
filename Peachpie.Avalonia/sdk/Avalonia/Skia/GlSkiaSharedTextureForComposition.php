<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlSkiaSharedTextureForCompositionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1($context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class GlSkiaSharedTextureForComposition extends \System\Object implements 
	\Avalonia\OpenGL\ICompositionImportableOpenGlSharedTexture,
	\Avalonia\Rendering\Composition\ICompositionImportableSharedGpuContextImage,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\OpenGL\IGlContext
	 */
	public  function get_Context(){}
	/**
	 * @uses GlSkiaSharedTextureForCompositionMethodsOverride::Dispose_1 ($context)
	 * @uses GlSkiaSharedTextureForCompositionMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TextureId(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_TextureId($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_InternalFormat(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
