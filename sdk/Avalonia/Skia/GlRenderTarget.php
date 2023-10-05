<?php
namespace Avalonia\Skia;
/**
 */
class GlRenderTarget extends \System\Object implements 
	\Avalonia\Skia\ISkiaGpuRenderTarget,
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
	 * @return \System\Boolean
	 */
	public  function get_IsCorrupted(){}
	/**
	 * @return \Avalonia\Skia\ISkiaGpuRenderSession
	 */
	public  function BeginRenderingSession(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
