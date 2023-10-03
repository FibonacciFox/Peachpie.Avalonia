<?php
namespace Avalonia\Rendering;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SwapchainBase_1 extends \System\Object implements 
	\System\IAsyncDisposable
{
	/**
	 * @return \Avalonia\Rendering\Composition\ICompositionGpuInterop
	 */
	protected  function get_Interop(){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionDrawingSurface
	 */
	protected  function get_Target(){}
	/**
	 * @param \Avalonia\Rendering\TImage $image
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsBroken($image){}
	/**
	 * @param \Avalonia\Rendering\TImage $image
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsReady($image){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CleanupAndFindNextImage($size){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @return \Avalonia\Rendering\TImage
	 */
	protected  function CreateImage($size){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Rendering\TImage& $image
	 * @return \System\IDisposable
	 */
	protected  function BeginDrawCore($size, $image){}
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
