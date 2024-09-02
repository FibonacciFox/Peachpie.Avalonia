<?php
namespace System\ComponentModel;
final class DesignerSerializationVisibilityAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DesignerSerializationVisibilityAttribute
	 */
	public static $Content;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DesignerSerializationVisibilityAttribute
	 */
	public static $Hidden;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DesignerSerializationVisibilityAttribute
	 */
	public static $Visible;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\DesignerSerializationVisibilityAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\ComponentModel\DesignerSerializationVisibility
	 * @since readonly
	 */
	public $Visibility;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\ComponentModel\DesignerSerializationVisibility $visibility
	 */
	public function __construct($visibility){}
}