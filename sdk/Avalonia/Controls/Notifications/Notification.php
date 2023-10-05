<?php
namespace Avalonia\Controls\Notifications;
/**
 */
class Notification extends \System\Object implements 
	\Avalonia\Controls\Notifications\INotification
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Title;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Message;
	/**
	 * @var \Avalonia\Controls\Notifications\NotificationType
	 * @property
	 */
	public $Type;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $Expiration;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $OnClick;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $OnClose;
	/**
	 * @return \System\String|string
	 */
	public  function get_Title(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Title($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Message(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Message($value){}
	/**
	 * @return \Avalonia\Controls\Notifications\NotificationType
	 */
	public  function get_Type(){}
	/**
	 * @param \Avalonia\Controls\Notifications\NotificationType $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Type($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Expiration(){}
	/**
	 * @param \System\TimeSpan $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Expiration($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_OnClick(){}
	/**
	 * @param \System\Action $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_OnClick($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_OnClose(){}
	/**
	 * @param \System\Action $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_OnClose($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
