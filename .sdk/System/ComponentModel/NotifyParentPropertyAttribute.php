<?php
namespace System\ComponentModel;
final class NotifyParentPropertyAttribute extends \System\Attribute
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\NotifyParentPropertyAttribute
	 */
	public static $Yes;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\NotifyParentPropertyAttribute
	 */
	public static $No;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\NotifyParentPropertyAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $NotifyParent;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $notifyParent
	 */
	public function __construct($notifyParent){}
}