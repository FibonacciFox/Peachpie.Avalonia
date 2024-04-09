<?php
namespace Avalonia\Metadata;
final class MarkupExtensionOptionAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Priority;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Object|object $value
	 */
	public function __construct($value){}
}