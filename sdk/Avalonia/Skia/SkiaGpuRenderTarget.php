<?php
namespace Avalonia\Skia;
/**
 */
class SkiaGpuRenderTarget extends \System\Object implements 
	\Avalonia\Platform\IRenderTarget,
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCorrupted;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\Platform\IDrawingContextImpl
	 */
	public  function CreateDrawingContext(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCorrupted(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
