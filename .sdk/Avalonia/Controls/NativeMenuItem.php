<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NativeMenuItemOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $header
	 */
	#[MethodOverride]public function __construct_2 ($header){}
}
class NativeMenuItem extends \Avalonia\Controls\NativeMenuItemBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\INativeMenuItemExporterEventsImplBridge
{
	use NativeMenuItemOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\NativeMenu]
	 */
	public static $MenuProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Imaging\Bitmap]
	 */
	public static $IconProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $HeaderProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $ToolTipProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\KeyGesture]
	 */
	public static $GestureProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsCheckedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\NativeMenuItemToggleType]
	 */
	public static $ToggleTypeProperty;
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
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsEnabledProperty;
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
	private static function CoerceMenu($sender, $value){}
	private function CanExecuteChanged(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Click($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Click($value){}
	private function RaiseClicked(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses NativeMenuItemOverride::__construct_1 <br>public , args: ()<br>
	 * @uses NativeMenuItemOverride::__construct_2 <br>public , args: ($header)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}