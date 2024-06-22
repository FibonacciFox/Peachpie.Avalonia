<?php
namespace Avalonia\Controls;
class NativeMenuItemBase extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\NativeMenuItemBase,Avalonia\Controls\NativeMenu]
	 */
	public static $ParentProperty;
	/**
	 * @property
	 * @var \Avalonia\Controls\NativeMenu
	 */
	public $Parent;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
}