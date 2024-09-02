<?php
namespace Avalonia\Utilities;
interface IWeakEventSubscriber_1
{

	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \TEventArgs $e
	 * @return \System\Void|void
	 */
	public function OnEvent($sender, $ev, $e);
}