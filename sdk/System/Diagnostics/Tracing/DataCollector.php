<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DataCollectorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function EnsureBuffer_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function EnsureBuffer_2($additionalSize){}
}
/**
 */
class DataCollector extends \System\ValueType
{
	/**
	 * @var \System\Diagnostics\Tracing\DataCollector
	 * @field
	 */
	protected $ThreadInstance;
	/**
	 * @param \System\Byte* $scratch
	 * @param \System\Int32|int $scratchSize
	 * @param \System\Diagnostics\Tracing\EventData* $datas
	 * @param \System\Int32|int $dataCount
	 * @param \System\Runtime\InteropServices\GCHandle* $pins
	 * @param \System\Int32|int $pinCount
	 * @return \System\Void|void
	 */
	protected  function Enable($scratch, $scratchSize, $datas, $dataCount, $pins, $pinCount){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Disable(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventData*
	 */
	protected  function Finish(){}
	/**
	 * @param \System\Void* $value
	 * @param \System\Int32|int $size
	 * @return \System\Void|void
	 */
	protected  function AddScalar($value, $size){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected  function AddNullTerminatedString($value){}
	/**
	 * @param \System\Array|array $value
	 * @param \System\Int32|int $length
	 * @param \System\Int32|int $itemSize
	 * @return \System\Void|void
	 */
	protected  function AddArray($value, $length, $itemSize){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function BeginBufferedArray(){}
	/**
	 * @param \System\Int32|int $bookmark
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected  function EndBufferedArray($bookmark, $count){}
	/**
	 * @return \System\Void|void
	 */
	protected  function BeginBuffered(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function EndBuffered(){}
	/**
	 * @uses DataCollectorMethodsOverride::EnsureBuffer_1 ()
	 * @uses DataCollectorMethodsOverride::EnsureBuffer_2 ($additionalSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnsureBuffer(mixed ...$args){}
	/**
	 * @param \System\Int32|int $required
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GrowBuffer($required){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PinArray($value, $size){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScalarsBegin(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScalarsEnd(){}
}
