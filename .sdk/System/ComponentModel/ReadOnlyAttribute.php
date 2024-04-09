<?php
namespace System\ComponentModel;
final class ReadOnlyAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\ReadOnlyAttribute
	 */
	public static $Yes;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\ReadOnlyAttribute
	 */
	public static $No;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\ReadOnlyAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $isReadOnly
	 */
	public function __construct($isReadOnly){}
}