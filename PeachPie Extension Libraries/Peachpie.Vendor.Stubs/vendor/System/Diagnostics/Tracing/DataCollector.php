<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DataCollectorOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function EnsureBuffer_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $additionalSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function EnsureBuffer_2 ($additionalSize){}
}
final class DataCollector extends \System\ValueType
{
	use DataCollectorOverride;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\DataCollector
	 */
	protected static $ThreadInstance;
	/**
	 * @param \System\Byte* $scratch
	 * @param \System\Int32|int $scratchSize
	 * @param \System\Diagnostics\Tracing\EventSource+EventData* $datas
	 * @param \System\Int32|int $dataCount
	 * @param \System\Runtime\InteropServices\GCHandle* $pins
	 * @param \System\Int32|int $pinCount
	 * @return \System\Void|void
	 */
	protected function Enable($scratch, $scratchSize, $datas, $dataCount, $pins, $pinCount){}
	/**
	 * @return \System\Void|void
	 */
	protected function Disable(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventSource+EventData*
	 */
	protected function Finish(){}
	/**
	 * @param \System\Void* $value
	 * @param \System\Int32|int $size
	 * @return \System\Void|void
	 */
	protected function AddScalar($value, $size){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected function AddNullTerminatedString($value){}
	/**
	 * @param \System\Array|array $value
	 * @param \System\Int32|int $length
	 * @param \System\Int32|int $itemSize
	 * @return \System\Void|void
	 */
	protected function AddArray($value, $length, $itemSize){}
	/**
	 * @return \System\Int32|int
	 */
	protected function BeginBufferedArray(){}
	/**
	 * @param \System\Int32|int $bookmark
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected function EndBufferedArray($bookmark, $count){}
	/**
	 * @return \System\Void|void
	 */
	protected function BeginBuffered(){}
	/**
	 * @return \System\Void|void
	 */
	protected function EndBuffered(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses DataCollectorOverride::EnsureBuffer_1 <br>private , args: ()<br>
	 * @uses DataCollectorOverride::EnsureBuffer_2 <br>private , args: ($additionalSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function EnsureBuffer (\override ...$args){}
	private function GrowBuffer($required){}
	private function PinArray($value, $size){}
	private function ScalarsBegin(){}
	private function ScalarsEnd(){}
}