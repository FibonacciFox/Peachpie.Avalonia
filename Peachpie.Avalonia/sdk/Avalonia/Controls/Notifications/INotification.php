<?php
namespace Avalonia\Controls\Notifications;
/**
 */
interface INotification
{
	/**
	 */
	public function get_Title();
	/**
	 */
	public function get_Message();
	/**
	 */
	public function get_Type();
	/**
	 */
	public function get_Expiration();
	/**
	 */
	public function get_OnClick();
	/**
	 */
	public function get_OnClose();
}
