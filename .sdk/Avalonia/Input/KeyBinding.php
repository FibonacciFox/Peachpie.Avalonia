<?php
namespace Avalonia\Input;
class KeyBinding extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Windows\Input\ICommand]
	 */
	public static $CommandProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 */
	public static $CommandParameterProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\KeyGesture]
	 */
	public static $GestureProperty;
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
	 * @var \Avalonia\Input\KeyGesture
	 */
	public $Gesture;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\Input\KeyEventArgs $args
	 * @return \System\Void|void
	 */
	public function TryHandle($args){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}