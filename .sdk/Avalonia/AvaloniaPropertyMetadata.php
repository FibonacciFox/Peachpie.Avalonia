<?php
namespace Avalonia;
class AvaloniaPropertyMetadata extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Data\BindingMode
	 * @since readonly
	 */
	public $DefaultBindingMode;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Boolean]
	 */
	public $EnableDataValidation;
	/**
	 * @param \Avalonia\AvaloniaPropertyMetadata $baseMetadata
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public function Merge($baseMetadata, $property){}
	/**
	 * @return \Avalonia\AvaloniaPropertyMetadata
	 */
	abstract public function GenerateTypeSafeMetadata();
	/**
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Nullable_1 $enableDataValidation [generic: System\Boolean]
	 */
	public function __construct($defaultBindingMode, $enableDataValidation){}
}