<?php
namespace System\Diagnostics\Tracing;
final class TraceLoggingMetadataCollector extends \System\Object
{

	/**
	 * @param \System\String|string $name
	 * @return \System\Diagnostics\Tracing\TraceLoggingMetadataCollector
	 */
	public function AddGroup($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $type
	 * @return \System\Void|void
	 */
	public function AddScalar($name, $type){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $type
	 * @return \System\Void|void
	 */
	public function AddNullTerminatedString($name, $type){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $type
	 * @return \System\Void|void
	 */
	public function AddArray($name, $type){}
	/**
	 * @return \System\Void|void
	 */
	public function BeginBufferedArray(){}
	/**
	 * @return \System\Void|void
	 */
	public function EndBufferedArray(){}
	/**
	 * @return \System\Byte[]
	 */
	protected function GetMetadata(){}
	private function AddField($fieldMetadata){}
}