<?php
namespace System\Diagnostics\Tracing;
/**
 */
class TraceLoggingMetadataCollector extends \System\Object
{
	/**
	 * @return \System\Diagnostics\Tracing\EventFieldTags
	 */
	protected  function get_Tags(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventFieldTags $value
	 * @return \System\Void|void
	 */
	protected  function set_Tags($value){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_ScratchSize(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_DataCount(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_PinCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_BeginningBufferedArray(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Diagnostics\Tracing\TraceLoggingMetadataCollector
	 */
	public  function AddGroup($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $type
	 * @return \System\Void|void
	 */
	public  function AddScalar($name, $type){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $type
	 * @return \System\Void|void
	 */
	public  function AddNullTerminatedString($name, $type){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $type
	 * @return \System\Void|void
	 */
	public  function AddArray($name, $type){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginBufferedArray(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndBufferedArray(){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function GetMetadata(){}
	/**
	 * @param \System\Diagnostics\Tracing\FieldMetadata $fieldMetadata
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddField($fieldMetadata){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
