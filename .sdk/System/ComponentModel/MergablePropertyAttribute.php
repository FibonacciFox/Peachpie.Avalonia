<?php
namespace System\ComponentModel;
final class MergablePropertyAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\MergablePropertyAttribute
	 */
	public static $Yes;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\MergablePropertyAttribute
	 */
	public static $No;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\MergablePropertyAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $AllowMerge;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $allowMerge
	 */
	public function __construct($allowMerge){}
}