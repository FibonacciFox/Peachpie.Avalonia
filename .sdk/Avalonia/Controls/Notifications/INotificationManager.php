<?php
namespace Avalonia\Controls\Notifications;
interface INotificationManager
{

	/**
	 * @param \Avalonia\Controls\Notifications\INotification $notification
	 * @return \System\Void|void
	 */
	public function Show($notification);
}