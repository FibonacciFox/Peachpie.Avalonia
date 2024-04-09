<?php
namespace Avalonia\Utilities;
class Subscription extends \System\Object
{

	private function Destroy(){}
	/**
	 * @param \Avalonia\Utilities\IWeakEventSubscriber_1 $s [generic: TEventArgs]
	 * @return \System\Void|void
	 */
	public function Add($s){}
	/**
	 * @param \Avalonia\Utilities\IWeakEventSubscriber_1 $s [generic: TEventArgs]
	 * @return \System\Void|void
	 */
	public function Remove($s){}
	private function ScheduleCompact(){}
	private function Compact(){}
	private function OnEvent($sender, $eventArgs){}
	/**
	 * @param \Avalonia\Utilities\WeakEvent_2 $ev [generic: TSender,TEventArgs]
	 * @param \TSender $target
	 */
	public function __construct($ev, $target){}
}