<?php
namespace System\ComponentModel;
final class BrowsableAttribute extends \System\Attribute
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\BrowsableAttribute
	 */
	public static $Yes;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\BrowsableAttribute
	 */
	public static $No;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\BrowsableAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Browsable;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $browsable
	 */
	public function __construct($browsable){}
}