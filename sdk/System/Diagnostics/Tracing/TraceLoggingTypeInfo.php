<?php
namespace System\Diagnostics\Tracing;
/**
 */
class TraceLoggingTypeInfo extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @property
	 */
	public readonly $Level;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @property
	 */
	public readonly $Opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	public readonly $Keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @property
	 */
	public readonly $Tags;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventLevel
	 */
	public  function get_Level(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventOpcode
	 */
	public  function get_Opcode(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventKeywords
	 */
	public  function get_Keywords(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventTags
	 */
	public  function get_Tags(){}
	/**
	 * @return \System\Type
	 */
	protected  function get_DataType(){}
	/**
	 * @return \System\Func_2
	 */
	protected  function get_PropertyValueFactory(){}
	/**
	 * @param \System\Diagnostics\Tracing\TraceLoggingMetadataCollector $collector
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $format
	 * @return \System\Void|void
	 */
	public  function WriteMetadata($collector, $name, $format){}
	/**
	 * @param \System\Diagnostics\Tracing\PropertyValue $value
	 * @return \System\Void|void
	 */
	public  function WriteData($value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	public  function GetData($value){}
	/**
	 * @param \System\Type $type
	 * @param \System\Collections\Generic\List_1 $recursionCheck
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function GetInstance($type, $recursionCheck){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
