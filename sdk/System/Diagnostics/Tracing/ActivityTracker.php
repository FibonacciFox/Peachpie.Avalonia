<?php
namespace System\Diagnostics\Tracing;
/**
 */
class ActivityTracker extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\ActivityTracker
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @param \System\String|string $providerName
	 * @param \System\String|string $activityName
	 * @param \System\Int32|int $task
	 * @param \System\Guid& $activityId
	 * @param \System\Guid& $relatedActivityId
	 * @param \System\Diagnostics\Tracing\EventActivityOptions $options
	 * @param \System\Boolean $useTplSource
	 * @return \System\Void|void
	 */
	public  function OnStart($providerName, $activityName, $task, $activityId, $relatedActivityId, $options, $useTplSource){}
	/**
	 * @param \System\String|string $providerName
	 * @param \System\String|string $activityName
	 * @param \System\Int32|int $task
	 * @param \System\Guid& $activityId
	 * @param \System\Boolean $useTplSource
	 * @return \System\Void|void
	 */
	public  function OnStop($providerName, $activityName, $task, $activityId, $useTplSource){}
	/**
	 * @return \System\Void|void
	 */
	public  function Enable(){}
	/**
	 * @return \System\Diagnostics\Tracing\ActivityTracker
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\ActivityInfo $startLocation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindActiveActivity($name, $startLocation){}
	/**
	 * @param \System\String|string $providerName
	 * @param \System\String|string $activityName
	 * @param \System\Int32|int $task
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NormalizeActivityName($providerName, $activityName, $task){}
	/**
	 * @param \System\Threading\AsyncLocalValueChangedArgs_1 $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ActivityChanging($args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
