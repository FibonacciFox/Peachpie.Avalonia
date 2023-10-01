<?php
namespace Avalonia\Controls\Notifications;
/**
 */
interface INotificationManager
{
	/**
	 * @param \Avalonia\Controls\Notifications\INotification $notification
	 */
	public function Show($notification);
}
