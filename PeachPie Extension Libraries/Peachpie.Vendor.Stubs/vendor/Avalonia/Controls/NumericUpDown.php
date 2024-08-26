<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NumericUpDownOverride {
	/**
	 * @deprecated
	 * @param \System\Globalization\NumberFormatInfo $oldValue
	 * @param \System\Globalization\NumberFormatInfo $newValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnNumberFormatChanged_1 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function OnNumberFormatChanged_2 ($e){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $oldValue
	 * @param \System\Boolean|bool $newValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnIsReadOnlyChanged_1 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function OnIsReadOnlyChanged_2 ($e){}
	/**
	 * @deprecated
	 * @param \System\Decimal $oldValue
	 * @param \System\Decimal $newValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnMaximumChanged_1 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function OnMaximumChanged_2 ($e){}
	/**
	 * @deprecated
	 * @param \System\Decimal $oldValue
	 * @param \System\Decimal $newValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnMinimumChanged_1 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function OnMinimumChanged_2 ($e){}
	/**
	 * @deprecated
	 * @param \System\String|string $oldValue
	 * @param \System\String|string $newValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnTextChanged_1 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function OnTextChanged_2 ($e){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\Converters\IValueConverter $oldValue
	 * @param \Avalonia\Data\Converters\IValueConverter $newValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnTextConverterChanged_1 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function OnTextConverterChanged_2 ($e){}
	/**
	 * @deprecated
	 * @param \System\Nullable_1 $oldValue [generic: System\Decimal]
	 * @param \System\Nullable_1 $newValue [generic: System\Decimal]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnValueChanged_1 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function OnValueChanged_2 ($e){}
	/**
	 * @deprecated
	 * @param \System\Decimal $baseValue
	 * @return \System\Decimal
	 */
	#[MethodOverride]protected function OnCoerceIncrement_1 ($baseValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \System\Decimal $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]private static function OnCoerceIncrement_2 ($instance, $value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $baseValue
	 * @return \System\Decimal
	 */
	#[MethodOverride]protected function OnCoerceMaximum_1 ($baseValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \System\Decimal $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]private static function OnCoerceMaximum_2 ($instance, $value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $baseValue
	 * @return \System\Decimal
	 */
	#[MethodOverride]protected function OnCoerceMinimum_1 ($baseValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \System\Decimal $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]private static function OnCoerceMinimum_2 ($instance, $value){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $updateValueFromText
	 * @param \System\String|string $text
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function SyncTextAndValueProperties_1 ($updateValueFromText, $text){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $updateValueFromText
	 * @param \System\String|string $text
	 * @param \System\Boolean|bool $forceTextUpdate
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function SyncTextAndValueProperties_2 ($updateValueFromText, $text, $forceTextUpdate){}
}
class NumericUpDown extends \Avalonia\Controls\Primitives\TemplatedControl implements
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
	\Avalonia\INamed,
	\Avalonia\Input\IInputElement,
	\Avalonia\Controls\Templates\IDataTemplateHost,
	\Avalonia\Rendering\IVisualBrushInitialize,
	\Avalonia\Styling\ISetterValue
{
	use NumericUpDownOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $AllowSpinProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Location]
	 */
	public static $ButtonSpinnerLocationProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $ShowButtonSpinnerProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $ClipValueToMinMaxProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Globalization\NumberFormatInfo]
	 */
	public static $NumberFormatProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $FormatStringProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Decimal]
	 */
	public static $IncrementProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsReadOnlyProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Decimal]
	 */
	public static $MaximumProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Decimal]
	 */
	public static $MinimumProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Globalization\NumberStyles]
	 */
	public static $ParsingNumberStyleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $TextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Data\Converters\IValueConverter]
	 */
	public static $TextConverterProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Nullable_1[System\Decimal]]
	 */
	public static $ValueProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $WatermarkProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Layout\HorizontalAlignment]
	 */
	public static $HorizontalContentAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Layout\VerticalAlignment]
	 */
	public static $VerticalContentAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\TextAlignment]
	 */
	public static $TextAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Controls\NumericUpDownValueChangedEventArgs]
	 */
	public static $ValueChangedEvent;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllowSpin;
	/**
	 * @property
	 * @var \Avalonia\Controls\Location
	 */
	public $ButtonSpinnerLocation;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ShowButtonSpinner;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ClipValueToMinMax;
	/**
	 * @property
	 * @var \System\Globalization\NumberFormatInfo
	 */
	public $NumberFormat;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $FormatString;
	/**
	 * @property
	 * @var \System\Decimal
	 */
	public $Increment;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Decimal
	 */
	public $Maximum;
	/**
	 * @property
	 * @var \System\Decimal
	 */
	public $Minimum;
	/**
	 * @property
	 * @var \System\Globalization\NumberStyles
	 */
	public $ParsingNumberStyle;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Text;
	/**
	 * @property
	 * @var \Avalonia\Data\Converters\IValueConverter
	 */
	public $TextConverter;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Decimal]
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Watermark;
	/**
	 * @property
	 * @var \Avalonia\Layout\HorizontalAlignment
	 */
	public $HorizontalContentAlignment;
	/**
	 * @property
	 * @var \Avalonia\Layout\VerticalAlignment
	 */
	public $VerticalContentAlignment;
	/**
	 * @property
	 * @var \Avalonia\Media\TextAlignment
	 */
	public $TextAlignment;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Background;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $BorderBrush;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $BorderThickness;
	/**
	 * @property
	 * @var \Avalonia\CornerRadius
	 */
	public $CornerRadius;
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
	 * @var \Avalonia\Thickness
	 */
	public $Padding;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IControlTemplate
	 */
	public $Template;
	/**
	 * @property
	 * @var \Avalonia\Controls\ITemplate_1[Avalonia\Controls\Control]
	 */
	public $FocusAdorner;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\DataTemplates
	 * @since readonly
	 */
	public $DataTemplates;
	/**
	 * @property
	 * @var \Avalonia\Controls\ContextMenu
	 */
	public $ContextMenu;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\FlyoutBase
	 */
	public $ContextFlyout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLoaded;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Tag;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Focusable;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsEnabled;
	/**
	 * @property
	 * @var \Avalonia\Input\Cursor
	 */
	public $Cursor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsKeyboardFocusWithin;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFocused;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsHitTestVisible;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsPointerOver;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsTabStop;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEffectivelyEnabled;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $TabIndex;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyBinding]
	 * @since readonly
	 */
	public $KeyBindings;
	/**
	 * @property
	 * @var \Avalonia\Input\GestureRecognizers\GestureRecognizerCollection
	 * @since readonly
	 */
	public $GestureRecognizers;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Height;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MinWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MinHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxHeight;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $Margin;
	/**
	 * @property
	 * @var \Avalonia\Layout\HorizontalAlignment
	 */
	public $HorizontalAlignment;
	/**
	 * @property
	 * @var \Avalonia\Layout\VerticalAlignment
	 */
	public $VerticalAlignment;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $DesiredSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMeasureValid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsArrangeValid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $UseLayoutRounding;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ClipToBounds;
	/**
	 * @property
	 * @var \Avalonia\Media\Geometry
	 */
	public $Clip;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEffectivelyVisible;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsVisible;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $OpacityMask;
	/**
	 * @property
	 * @var \Avalonia\Media\IEffect
	 */
	public $Effect;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasMirrorTransform;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 */
	public $RenderTransform;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $RenderTransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Media\FlowDirection
	 */
	public $FlowDirection;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ZIndex;
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
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @uses NumericUpDownOverride::OnNumberFormatChanged_1 <br>protected , args: ($oldValue, $newValue)<br>
	 * @uses NumericUpDownOverride::OnNumberFormatChanged_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnNumberFormatChanged (\override ...$args){}
	/**
	 * @param \System\String|string $oldValue
	 * @param \System\String|string $newValue
	 * @return \System\Void|void
	 */
	protected function OnFormatStringChanged($oldValue, $newValue){}
	/**
	 * @param \System\Decimal $oldValue
	 * @param \System\Decimal $newValue
	 * @return \System\Void|void
	 */
	protected function OnIncrementChanged($oldValue, $newValue){}
	/**
	 * @uses NumericUpDownOverride::OnIsReadOnlyChanged_1 <br>protected , args: ($oldValue, $newValue)<br>
	 * @uses NumericUpDownOverride::OnIsReadOnlyChanged_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnIsReadOnlyChanged (\override ...$args){}
	/**
	 * @uses NumericUpDownOverride::OnMaximumChanged_1 <br>protected , args: ($oldValue, $newValue)<br>
	 * @uses NumericUpDownOverride::OnMaximumChanged_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnMaximumChanged (\override ...$args){}
	/**
	 * @uses NumericUpDownOverride::OnMinimumChanged_1 <br>protected , args: ($oldValue, $newValue)<br>
	 * @uses NumericUpDownOverride::OnMinimumChanged_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnMinimumChanged (\override ...$args){}
	/**
	 * @uses NumericUpDownOverride::OnTextChanged_1 <br>protected , args: ($oldValue, $newValue)<br>
	 * @uses NumericUpDownOverride::OnTextChanged_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnTextChanged (\override ...$args){}
	/**
	 * @uses NumericUpDownOverride::OnTextConverterChanged_1 <br>protected , args: ($oldValue, $newValue)<br>
	 * @uses NumericUpDownOverride::OnTextConverterChanged_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnTextConverterChanged (\override ...$args){}
	/**
	 * @uses NumericUpDownOverride::OnValueChanged_1 <br>protected , args: ($oldValue, $newValue)<br>
	 * @uses NumericUpDownOverride::OnValueChanged_2 <br>private , args: ($e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnValueChanged (\override ...$args){}
	/**
	 * @uses NumericUpDownOverride::OnCoerceIncrement_1 <br>protected , args: ($baseValue)<br>
	 * @uses NumericUpDownOverride::OnCoerceIncrement_2 <br>private , args: ($instance, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|mixed|\override
	 */
	#[MethodOverrideProtected]function OnCoerceIncrement (\override ...$args){}
	/**
	 * @uses NumericUpDownOverride::OnCoerceMaximum_1 <br>protected , args: ($baseValue)<br>
	 * @uses NumericUpDownOverride::OnCoerceMaximum_2 <br>private , args: ($instance, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|mixed|\override
	 */
	#[MethodOverrideProtected]function OnCoerceMaximum (\override ...$args){}
	/**
	 * @uses NumericUpDownOverride::OnCoerceMinimum_1 <br>protected , args: ($baseValue)<br>
	 * @uses NumericUpDownOverride::OnCoerceMinimum_2 <br>private , args: ($instance, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|mixed|\override
	 */
	#[MethodOverrideProtected]function OnCoerceMinimum (\override ...$args){}
	/**
	 * @param \System\Nullable_1 $baseValue [generic: System\Decimal]
	 * @return \System\Nullable_1[System\Decimal]
	 */
	protected function OnCoerceValue($baseValue){}
	/**
	 * @param \Avalonia\Controls\SpinEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnSpin($e){}
	/**
	 * @param \System\Nullable_1 $oldValue [generic: System\Decimal]
	 * @param \System\Nullable_1 $newValue [generic: System\Decimal]
	 * @return \System\Void|void
	 */
	protected function RaiseValueChangedEvent($oldValue, $newValue){}
	private function ConvertTextToValue($text){}
	private function ConvertValueToText(){}
	private function OnIncrement(){}
	private function OnDecrement(){}
	private function SetValidSpinDirection(){}
	private static function IncrementChanged($e){}
	private static function FormatStringChanged($e){}
	private function SetValueInternal($value){}
	private function TextBoxOnTextChanged(){}
	private function OnSpinnerSpin($sender, $e){}
	private function DoDecrement(){}
	private function DoIncrement(){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\SpinEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Spinned($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\SpinEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Spinned($value){}
	private function TextBoxOnPointerPressed($sender, $e){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\NumericUpDownValueChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_ValueChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\NumericUpDownValueChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_ValueChanged($value){}
	private function CommitInput($forceTextUpdate){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses NumericUpDownOverride::SyncTextAndValueProperties_1 <br>private , args: ($updateValueFromText, $text)<br>
	 * @uses NumericUpDownOverride::SyncTextAndValueProperties_2 <br>private , args: ($updateValueFromText, $text, $forceTextUpdate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function SyncTextAndValueProperties (\override ...$args){}
	private function ConvertTextToValueCore($currentValueText, $text){}
	private function ValidateMinMax($value){}
	private static function ParsePercent($text, $cultureInfo){}
	private function IsPercent($stringToTest){}
	private function FocusChanged($hasFocus){}
	private function get_IsDataTemplatesInitialized(){}
	private function Initialize($setter){}
	private function EnsureInitialized(){}
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
	/**
	 */
	public function __construct(){}
}