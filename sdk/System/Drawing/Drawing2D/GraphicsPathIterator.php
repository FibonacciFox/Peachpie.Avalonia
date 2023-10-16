<?php
namespace System\Drawing\Drawing2D;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GraphicsPathIteratorMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function NextMarker_1($path){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function NextMarker_2($startIndex, $endIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function NextSubpath_1($path, $isClosed){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function NextSubpath_2($startIndex, $endIndex, $isClosed){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class GraphicsPathIterator extends \System\MarshalByRefObject implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $SubpathCount;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SubpathCount(){}
	/**
	 * @param \System\Drawing\PointF[]& $points
	 * @param \System\Byte[]& $types
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $endIndex
	 * @return \System\Int32|int
	 */
	public  function CopyData($points, $types, $startIndex, $endIndex){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Drawing\PointF[]& $points
	 * @param \System\Byte[]& $types
	 * @return \System\Int32|int
	 */
	public  function Enumerate($points, $types){}
	/**
	 * @return \System\Boolean
	 */
	public  function HasCurve(){}
	/**
	 * @uses GraphicsPathIteratorMethodsOverride::NextMarker_1 ($path)
	 * @uses GraphicsPathIteratorMethodsOverride::NextMarker_2 ($startIndex, $endIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextMarker(mixed ...$args){}
	/**
	 * @param \System\Byte& $pathType
	 * @param \System\Int32& $startIndex
	 * @param \System\Int32& $endIndex
	 * @return \System\Int32|int
	 */
	public  function NextPathType($pathType, $startIndex, $endIndex){}
	/**
	 * @uses GraphicsPathIteratorMethodsOverride::NextSubpath_1 ($path, $isClosed)
	 * @uses GraphicsPathIteratorMethodsOverride::NextSubpath_2 ($startIndex, $endIndex, $isClosed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextSubpath(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Rewind(){}
	/**
	 * @uses GraphicsPathIteratorMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses GraphicsPathIteratorMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
