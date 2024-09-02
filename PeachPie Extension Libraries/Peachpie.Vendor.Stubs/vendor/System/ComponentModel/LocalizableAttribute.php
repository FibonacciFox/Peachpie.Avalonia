<?php
namespace System\ComponentModel;
final class LocalizableAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\LocalizableAttribute
	 */
	public static $Yes;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\LocalizableAttribute
	 */
	public static $No;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\LocalizableAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLocalizable;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $isLocalizable
	 */
	public function __construct($isLocalizable){}
}