<?php
namespace Avalonia\Skia;
/**
 */
class StreamGeometryImpl extends \Avalonia\Skia\GeometryImpl implements 
	\Avalonia\Platform\IGeometryImpl,
	\Avalonia\Platform\IStreamGeometryImpl
{
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
