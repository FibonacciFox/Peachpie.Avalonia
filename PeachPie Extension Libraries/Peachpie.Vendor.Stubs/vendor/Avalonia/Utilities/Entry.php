<?php
namespace Avalonia\Utilities;
final class Entry extends \System\ValueType
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @field
	 * @since readonly
	 * @var \TValue
	 */
	public $Value;
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \TValue $value
	 */
	public function __construct($property, $value){}
}