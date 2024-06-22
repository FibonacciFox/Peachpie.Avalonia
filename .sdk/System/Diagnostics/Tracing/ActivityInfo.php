<?php
namespace System\Diagnostics\Tracing;
final class ActivityInfo extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	protected $m_name;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Guid
	 */
	protected $m_guid;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_activityPathGuidOffset;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_level;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 */
	protected $m_eventOptions;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $m_lastChildID;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_stopped;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\ActivityTracker+ActivityInfo
	 */
	protected $m_creator;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Guid
	 */
	protected $m_activityIdToRestore;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $ActivityId;
	/**
	 * @param \System\Diagnostics\Tracing\ActivityTracker+ActivityInfo $activityInfo
	 * @return \System\String|string
	 */
	public static function Path($activityInfo){}
	/**
	 * @param \System\Diagnostics\Tracing\ActivityTracker+ActivityInfo $list
	 * @return \System\String|string
	 */
	public static function LiveActivities($list){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function CanBeOrphan(){}
	private function CreateActivityPathGuid(&$idRet, &$activityPathGuidOffset){}
	private function CreateOverflowGuid($outPtr){}
	private static function AddIdToGuid($outPtr, $whereToAddId, $id, $overflow){}
	private static function WriteNibble($ptr, $endPtr, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int64|int $uniqueId
	 * @param \System\Diagnostics\Tracing\ActivityTracker+ActivityInfo $creator
	 * @param \System\Guid $activityIDToRestore
	 * @param \System\Diagnostics\Tracing\EventActivityOptions $options
	 */
	public function __construct($name, $uniqueId, $creator, $activityIDToRestore, $options){}
}