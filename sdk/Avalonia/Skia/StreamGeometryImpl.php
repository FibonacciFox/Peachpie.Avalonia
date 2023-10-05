<?php
namespace Avalonia\Skia;
/**
 */
class StreamGeometryImpl extends \Avalonia\Skia\GeometryImpl implements 
	\Avalonia\Platform\IGeometryImpl,
	\Avalonia\Platform\IStreamGeometryImpl
{
	/**
	 * @var \SkiaSharp\SKPath
	 * @property
	 */
	public readonly $StrokePath;
	/**
	 * @var \SkiaSharp\SKPath
	 * @property
	 */
	public readonly $FillPath;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $ContourLength;
	/**
	 * @return \Avalonia\Platform\IStreamGeometryImpl
	 */
	public  function Clone(){}
	/**
	 * @return \Avalonia\Platform\IStreamGeometryContextImpl
	 */
	public  function Open(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateEmptyPath(){}
}
