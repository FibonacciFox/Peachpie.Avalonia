<?php
namespace Avalonia\Controls\Documents;
class TextElement extends \Avalonia\StyledElement implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\IDataContextProvider,
	\Avalonia\LogicalTree\ILogical,
	\Avalonia\Styling\IThemeVariantHost,
	\Avalonia\Controls\IResourceHost,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Styling\IStyleHost,
	\Avalonia\Controls\ISetLogicalParent,
	\Avalonia\Controls\ISetInheritanceParent,
	\System\ComponentModel\ISupportInitialize,
	\Avalonia\Styling\IStyleable,
	\Avalonia\INamed
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $BackgroundProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\FontFamily]
	 */
	public static $FontFamilyProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 */
	public static $FontSizeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\FontStyle]
	 */
	public static $FontStyleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\FontWeight]
	 */
	public static $FontWeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\FontStretch]
	 */
	public static $FontStretchProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\IBrush]
	 */
	public static $ForegroundProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Background;
	/**
	 * @property
	 * @var \Avalonia\Media\FontFamily
	 */
	public $FontFamily;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $FontSize;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStyle
	 */
	public $FontStyle;
	/**
	 * @property
	 * @var \Avalonia\Media\FontWeight
	 */
	public $FontWeight;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStretch
	 */
	public $FontStretch;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Foreground;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \Avalonia\Controls\Classes
	 * @since readonly
	 */
	public $Classes;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $DataContext;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInitialized;
	/**
	 * @property
	 * @var \Avalonia\Styling\Styles
	 * @since readonly
	 */
	public $Styles;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $StyleKey;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceDictionary
	 */
	public $Resources;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaObject
	 */
	public $TemplatedParent;
	/**
	 * @property
	 * @var \Avalonia\Styling\ControlTheme
	 */
	public $Theme;
	/**
	 * @property
	 * @var \Avalonia\StyledElement
	 * @since readonly
	 */
	public $Parent;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 * @since readonly
	 */
	public $ActualThemeVariant;
	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\FontFamily
	 */
	public static function GetFontFamily($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\FontFamily $value
	 * @return \System\Void|void
	 */
	public static function SetFontFamily($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetFontSize($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function SetFontSize($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\FontStyle
	 */
	public static function GetFontStyle($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\FontStyle $value
	 * @return \System\Void|void
	 */
	public static function SetFontStyle($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\FontWeight
	 */
	public static function GetFontWeight($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\FontWeight $value
	 * @return \System\Void|void
	 */
	public static function SetFontWeight($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\FontStretch
	 */
	public static function GetFontStretch($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\FontStretch $value
	 * @return \System\Void|void
	 */
	public static function SetFontStretch($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\IBrush
	 */
	public static function GetForeground($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public static function SetForeground($control, $value){}
	/**
	 * @param \Avalonia\Controls\Documents\IInlineHost $oldValue
	 * @param \Avalonia\Controls\Documents\IInlineHost $newValue
	 * @return \System\Void|void
	 */
	protected function OnInlineHostChanged($oldValue, $newValue){}
	private function get_IsAttachedToLogicalTree(){}
	private function get_LogicalParent(){}
	private function get_HasResources(){}
	private function get_IsStylesInitialized(){}
	private function get_StylingParent(){}
	private function NotifyAttachedToLogicalTree($e){}
	private function NotifyDetachedFromLogicalTree($e){}
	private function NotifyHostedResourcesChanged($e){}
	private function StylesAdded($styles){}
	private function StylesRemoved($styles){}
	private function GetPropertyChangedSubscribers(){}
}