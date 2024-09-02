<?php
namespace System\Diagnostics\Tracing;
final class ActivityTracker extends \System\Object
{
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\ActivityTracker
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \System\String|string $providerName
	 * @param \System\String|string $activityName
	 * @param \System\Int32|int $task
	 * @param \System\Guid& $activityId
	 * @param \System\Guid& $relatedActivityId
	 * @param \System\Diagnostics\Tracing\EventActivityOptions $options
	 * @param \System\Boolean|bool $useTplSource
	 * @return \System\Void|void
	 */
	public function OnStart($providerName, $activityName, $task, $activityId, $relatedActivityId, $options, $useTplSource){}
	/**
	 * @param \System\String|string $providerName
	 * @param \System\String|string $activityName
	 * @param \System\Int32|int $task
	 * @param \System\Guid& $activityId
	 * @param \System\Boolean|bool $useTplSource
	 * @return \System\Void|void
	 */
	public function OnStop($providerName, $activityName, $task, $activityId, $useTplSource){}
	/**
	 * @return \System\Void|void
	 */
	public function Enable(){}
	private static function FindActiveActivity($name, $startLocation){}
	private static function NormalizeActivityName($providerName, $activityName, $task){}
	private function ActivityChanging($args){}
	/**
	 */
	public function __construct(){}
}