<?php
namespace Avalonia\Skia\Metal;
/**
 */
class SkiaMetalRenderTarget extends \System\Object implements 
	\Avalonia\Skia\ISkiaGpuRenderTarget,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\Skia\ISkiaGpuRenderSession
	 */
	public  function BeginRenderingSession(){}
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
