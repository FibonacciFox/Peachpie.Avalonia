<?php
namespace Avalonia\Skia;
/**
 */
class GlyphRunImpl extends \System\Object implements 
	\Avalonia\Platform\IGlyphRunImpl,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Media\IGlyphTypeface
	 */
	public  function get_GlyphTypeface(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_FontRenderingEmSize(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_BaselineOrigin(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Bounds(){}
	/**
	 * @param \Avalonia\Media\RenderOptions $renderOptions
	 * @return \SkiaSharp\SKTextBlob
	 */
	public  function GetTextBlob($renderOptions){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Single $lowerLimit
	 * @param \System\Single $upperLimit
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetIntersections($lowerLimit, $upperLimit){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
