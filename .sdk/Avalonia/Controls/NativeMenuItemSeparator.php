<?php
namespace Avalonia\Controls;
class NativeMenuItemSeparator extends \Avalonia\Controls\NativeMenuItem implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\INativeMenuItemExporterEventsImplBridge
{

	/**
	 * @property
	 * @var \Avalonia\Controls\NativeMenu
	 */
	public $Menu;
	/**
	 * @property
	 * @var \Avalonia\Media\Imaging\Bitmap
	 */
	public $Icon;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Header;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $ToolTip;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyGesture
	 */
	public $Gesture;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsChecked;
	/**
	 * @property
	 * @var \Avalonia\Controls\NativeMenuItemToggleType
	 */
	public $ToggleType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsEnabled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasClickHandlers;
	/**
	 * @property
	 * @var \System\Windows\Input\ICommand
	 */
	public $Command;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $CommandParameter;
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
	private function RaiseClicked(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}