<?php
namespace Avalonia\Controls\Notifications;
class Notification extends \System\Object implements
	\Avalonia\Controls\Notifications\INotification
{

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Title;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Message;
	/**
	 * @property
	 * @var \Avalonia\Controls\Notifications\NotificationType
	 */
	public $Type;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Expiration;
	/**
	 * @property
	 * @var \System\Action
	 */
	public $OnClick;
	/**
	 * @property
	 * @var \System\Action
	 */
	public $OnClose;
	/**
	 * @param \System\String|string $title
	 * @param \System\String|string $message
	 * @param \Avalonia\Controls\Notifications\NotificationType $type
	 * @param \System\Nullable_1 $expiration [generic: System\TimeSpan]
	 * @param \System\Action $onClick
	 * @param \System\Action $onClose
	 */
	public function __construct($title, $message, $type, $expiration, $onClick, $onClose){}
}