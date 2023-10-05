<?php
namespace Avalonia\Skia;
/**
 */
class TransformedGeometryImpl extends \Avalonia\Skia\GeometryImpl implements 
	\Avalonia\Platform\IGeometryImpl,
	\Avalonia\Platform\ITransformedGeometryImpl
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
	 * @var \Avalonia\Platform\IGeometryImpl
	 * @property
	 */
	public readonly $SourceGeometry;
	/**
	 * @var \Avalonia\Matrix
	 * @property
	 */
	public readonly $Transform;
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
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function get_SourceGeometry(){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_Transform(){}
}
