<?php
namespace System\Diagnostics\Tracing;
/**
 */
class MoreEventInfo extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $Message;
	/**
	 * @var \System\String
	 * @field
	 */
	public $EventName;
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\String]
	 * @field
	 */
	public $PayloadNames;
	/**
	 * @var \System\Guid
	 * @field
	 */
	public $RelatedActivityId;
	/**
	 * @var \System\Nullable_1[System\Int64]
	 * @field
	 */
	public $OsThreadId;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @field
	 */
	public $Tags;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	public $Opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @field
	 */
	public $Level;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @field
	 */
	public $Keywords;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
