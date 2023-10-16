<?php
namespace System\Diagnostics\Tracing;
/**
 */
class ActivityInfo extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected readonly $m_name;
	/**
	 * @var \System\Guid
	 * @field
	 */
	protected readonly $m_guid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_activityPathGuidOffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_level;
	/**
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 * @field
	 */
	protected readonly $m_eventOptions;
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected $m_lastChildID;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_stopped;
	/**
	 * @var \System\Diagnostics\Tracing\ActivityTracker+ActivityInfo
	 * @field
	 */
	protected readonly $m_creator;
	/**
	 * @var \System\Guid
	 * @field
	 */
	protected readonly $m_activityIdToRestore;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $ActivityId;
	/**
	 * @return \System\Guid
	 */
	public  function get_ActivityId(){}
	/**
	 * @param \System\Diagnostics\Tracing\ActivityInfo $activityInfo
	 * @return \System\String|string
	 */
	public static function Path($activityInfo){}
	/**
	 * @param \System\Diagnostics\Tracing\ActivityInfo $list
	 * @return \System\String|string
	 */
	public static function LiveActivities($list){}
	/**
	 * @return \System\Boolean
	 */
	public  function CanBeOrphan(){}
	/**
	 * @param \System\Guid& $idRet
	 * @param \System\Int32& $activityPathGuidOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateActivityPathGuid($idRet, $activityPathGuidOffset){}
	/**
	 * @param \System\Guid* $outPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateOverflowGuid($outPtr){}
	/**
	 * @param \System\Guid* $outPtr
	 * @param \System\Int32|int $whereToAddId
	 * @param \System\UInt32 $id
	 * @param \System\Boolean $overflow
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddIdToGuid($outPtr, $whereToAddId, $id, $overflow){}
	/**
	 * @param \System\Byte*& $ptr
	 * @param \System\Byte* $endPtr
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteNibble($ptr, $endPtr, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
