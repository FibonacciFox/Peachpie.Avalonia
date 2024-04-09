<?php
namespace System\ComponentModel;
final class ImmutableObjectAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\ImmutableObjectAttribute
	 */
	public static $Yes;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\ImmutableObjectAttribute
	 */
	public static $No;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\ImmutableObjectAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Immutable;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $immutable
	 */
	public function __construct($immutable){}
}