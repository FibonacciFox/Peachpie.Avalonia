<?php
namespace Avalonia\OpenGL\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OpenGlControlBaseResourcesMethodsOverride
{
	/**
	 * @return \Avalonia\OpenGL\Controls\OpenGlControlBaseResources
	 */
	#[MethodOverride] public static function TryCreate_1($surface, $interop, $feature){}
	/**
	 * @return \Avalonia\OpenGL\Controls\OpenGlControlBaseResources
	 */
	#[MethodOverride] public static function TryCreate_2($context, $surface, $interop, $externalObjects){}
}
/**
 */
class OpenGlControlBaseResources extends \System\Object implements 
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Fbo;
	/**
	 * @var \Avalonia\Rendering\Composition\CompositionDrawingSurface
	 * @property
	 */
	public readonly $Surface;
	/**
	 * @var \Avalonia\OpenGL\IGlContext
	 * @property
	 */
	public $Context;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Fbo(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Fbo($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionDrawingSurface
	 */
	public  function get_Surface(){}
	/**
	 * @return \Avalonia\OpenGL\IGlContext
	 */
	public  function get_Context(){}
	/**
	 * @param \Avalonia\OpenGL\IGlContext $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Context($value){}
	/**
	 * @uses OpenGlControlBaseResourcesMethodsOverride::TryCreate_1 ($surface, $interop, $feature)
	 * @uses OpenGlControlBaseResourcesMethodsOverride::TryCreate_2 ($context, $surface, $interop, $externalObjects)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryCreate(mixed ...$args){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateDepthRenderbuffer($size){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @return \System\IDisposable
	 */
	public  function BeginDraw($size){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function DisposeAsync(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
