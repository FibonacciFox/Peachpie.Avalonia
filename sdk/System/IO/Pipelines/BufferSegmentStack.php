<?php
namespace System\IO\Pipelines;
/**
 */
class BufferSegmentStack extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\IO\Pipelines\BufferSegment& $result
	 * @return \System\Boolean
	 */
	public  function TryPop($result){}
	/**
	 * @param \System\IO\Pipelines\BufferSegment $item
	 * @return \System\Void|void
	 */
	public  function Push($item){}
	/**
	 * @param \System\IO\Pipelines\BufferSegment $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PushWithResize($item){}
}
