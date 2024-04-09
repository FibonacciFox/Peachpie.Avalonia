<?php
namespace System\Diagnostics\Tracing;
final class MoreEventInfo extends \System\Object
{
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $Message;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $EventName;
	/**
	 * @field
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\String]
	 */
	public $PayloadNames;
	/**
	 * @field
	 * @var \System\Guid
	 */
	public $RelatedActivityId;
	/**
	 * @field
	 * @var \System\Nullable_1[System\Int64]
	 */
	public $OsThreadId;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	public $Tags;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	public $Opcode;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	public $Level;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	public $Keywords;
	/**
	 */
	public function __construct(){}
}