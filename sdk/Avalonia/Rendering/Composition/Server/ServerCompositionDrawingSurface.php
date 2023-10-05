<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionDrawingSurfaceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_1($prop, $field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_2($prop, $field, $value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	#[MethodOverride] protected  function GetValue_1($prop, $field){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	#[MethodOverride] protected  function GetValue_2($prop, $field){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAnimatedValue_1($prop, $field, $committedAt, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAnimatedValue_2($property, $field, $value){}
}
/**
 */
class ServerCompositionDrawingSurface extends \Avalonia\Rendering\Composition\Server\ServerCompositionSurface implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject,
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Utilities\IRef_1[Avalonia\Platform\IBitmapImpl]
	 * @property
	 */
	public readonly $Bitmap;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $Changed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsActive;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuImage $image
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PerformSanityChecks($image){}
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $newImage
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Update($newImage, $context){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuImage $image
	 * @return \System\Void|void
	 */
	public  function UpdateWithAutomaticSync($image){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuImage $image
	 * @param \System\UInt32 $acquireIndex
	 * @param \System\UInt32 $releaseIndex
	 * @return \System\Void|void
	 */
	public  function UpdateWithKeyedMutex($image, $acquireIndex, $releaseIndex){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuImage $image
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuSemaphore $wait
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuSemaphore $signal
	 * @return \System\Void|void
	 */
	public  function UpdateWithSemaphores($image, $wait, $signal){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerCompositionDrawingSurfaceMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionDrawingSurfaceMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionDrawingSurfaceMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerCompositionDrawingSurfaceMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionDrawingSurfaceMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerCompositionDrawingSurfaceMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
