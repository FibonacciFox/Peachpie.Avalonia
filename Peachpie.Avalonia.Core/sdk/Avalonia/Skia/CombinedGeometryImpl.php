<?php
namespace Avalonia\Skia;
/**
 */
class CombinedGeometryImpl extends \Avalonia\Skia\GeometryImpl implements 
	\Avalonia\Platform\IGeometryImpl
{
	/**
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Platform\IGeometryImpl $g1
	 * @param \Avalonia\Platform\IGeometryImpl $g2
	 * @return \Avalonia\Skia\CombinedGeometryImpl
	 */
	public static function ForceCreate($combineMode, $g1, $g2){}
	/**
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Skia\GeometryImpl $g1
	 * @param \Avalonia\Skia\GeometryImpl $g2
	 * @return \Avalonia\Skia\CombinedGeometryImpl
	 */
	public static function TryCreate($combineMode, $g1, $g2){}
}
