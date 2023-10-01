<?php
namespace Avalonia\Skia;
/**
 */
class PictureRenderTarget extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \SkiaSharp\SKPicture
	 */
	public  function GetPicture(){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Platform\IDrawingContextImpl
	 */
	public  function CreateDrawingContext($size){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
