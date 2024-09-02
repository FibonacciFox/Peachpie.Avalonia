<?php
namespace Avalonia\Controls;
class TrayIcon extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\Platform\INativeMenuExporterProvider,
	\System\IDisposable
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
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\TrayIcons]
	 */
	public static $IconsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\NativeMenu]
	 */
	public static $MenuProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\WindowIcon]
	 */
	public static $IconProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $ToolTipTextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsVisibleProperty;
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
	public $Menu;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowIcon
	 */
	public $Icon;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $ToolTipText;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsVisible;
	/**
	 * @property
	 * @var \Avalonia\Controls\Platform\INativeMenuExporter
	 * @since readonly
	 */
	public $NativeMenuExporter;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Clicked($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Clicked($value){}
	/**
	 * @param \Avalonia\Application $o
	 * @param \Avalonia\Controls\TrayIcons $trayIcons
	 * @return \System\Void|void
	 */
	public static function SetIcons($o, $trayIcons){}
	/**
	 * @param \Avalonia\Application $o
	 * @return \Avalonia\Controls\TrayIcons
	 */
	public static function GetIcons($o){}
	private static function Lifetime_Exit($sender, $e){}
	private static function Icons_CollectionChanged($sender, $e){}
	private static function RemoveIcons($icons){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}