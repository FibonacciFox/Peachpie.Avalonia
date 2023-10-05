<?php
namespace Avalonia\Skia;
/**
 */
class GeometryGroupImpl extends \Avalonia\Skia\GeometryImpl implements 
	\Avalonia\Platform\IGeometryImpl
{
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $Bounds;
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
	 * @var \System\Double
	 * @property
	 */
	public readonly $ContourLength;
}
