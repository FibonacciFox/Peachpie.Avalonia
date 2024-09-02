<?php
namespace Avalonia\Diagnostics;
class AvaloniaPropertyValue extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 * @since readonly
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 * @since readonly
	 */
	public $Priority;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Diagnostic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsOverriddenCurrentValue;

}