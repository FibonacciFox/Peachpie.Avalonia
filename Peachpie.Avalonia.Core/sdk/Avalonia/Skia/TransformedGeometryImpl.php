<?php
namespace Avalonia\Skia;
/**
 */
class TransformedGeometryImpl extends \Avalonia\Skia\GeometryImpl implements 
	\Avalonia\Platform\IGeometryImpl,
	\Avalonia\Platform\ITransformedGeometryImpl
{
	/**
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function get_SourceGeometry(){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_Transform(){}
}
