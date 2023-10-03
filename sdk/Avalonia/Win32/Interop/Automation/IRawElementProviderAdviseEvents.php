<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IRawElementProviderAdviseEvents
{
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Int32[] $properties
	 */
	public function AdviseEventAdded($eventId, $properties);
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Int32[] $properties
	 */
	public function AdviseEventRemoved($eventId, $properties);
}
