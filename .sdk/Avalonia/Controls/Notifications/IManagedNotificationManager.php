<?php
namespace Avalonia\Controls\Notifications;
interface IManagedNotificationManager
{

	/**
	 * @param \System\Object|object $content
	 * @return \System\Void|void
	 */
	public function Show($content);
}