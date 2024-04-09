<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextBlockOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride]private function get_VisualChildren_1 (){}
}
class TextBlock extends \Avalonia\Controls\Control implements
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
	\Avalonia\Styling\ISetterValue,
	\Avalonia\Controls\Documents\IInlineHost
{
	use TextBlockOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $BackgroundProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Thickness]
	 */
	public static $PaddingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\FontFamily]
	 */
	public static $FontFamilyProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $FontSizeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\FontStyle]
	 */
	public static $FontStyleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\FontWeight]
	 */
	public static $FontWeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\FontStretch]
	 */
	public static $FontStretchProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $ForegroundProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 */
	public static $BaselineOffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 */
	public static $LineHeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 */
	public static $LineSpacingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Double]
	 */
	public static $LetterSpacingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 */
	public static $MaxLinesProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $TextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\TextAlignment]
	 */
	public static $TextAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\TextWrapping]
	 */
	public static $TextWrappingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\TextTrimming]
	 */
	public static $TextTrimmingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\TextDecorationCollection]
	 */
	public static $TextDecorationsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\TextBlock,Avalonia\Controls\Documents\InlineCollection]
	 */
	public static $InlinesProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextLayout
	 * @since readonly
	 */
	public $TextLayout;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $Padding;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Background;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Text;
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
	 * @var \System\Double|double
	 */
	public $LineHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $LineSpacing;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $LetterSpacing;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $MaxLines;
	/**
	 * @property
	 * @var \Avalonia\Media\TextWrapping
	 */
	public $TextWrapping;
	/**
	 * @property
	 * @var \Avalonia\Media\TextTrimming
	 */
	public $TextTrimming;
	/**
	 * @property
	 * @var \Avalonia\Media\TextAlignment
	 */
	public $TextAlignment;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationCollection
	 */
	public $TextDecorations;
	/**
	 * @property
	 * @var \Avalonia\Controls\Documents\InlineCollection
	 */
	public $Inlines;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $BaselineOffset;
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
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetBaselineOffset($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function SetBaselineOffset($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\TextAlignment
	 */
	public static function GetTextAlignment($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\TextAlignment $alignment
	 * @return \System\Void|void
	 */
	public static function SetTextAlignment($control, $alignment){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\TextWrapping
	 */
	public static function GetTextWrapping($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\TextWrapping $wrapping
	 * @return \System\Void|void
	 */
	public static function SetTextWrapping($control, $wrapping){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function GetTextTrimming($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\TextTrimming $trimming
	 * @return \System\Void|void
	 */
	public static function SetTextTrimming($control, $trimming){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetLineHeight($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $height
	 * @return \System\Void|void
	 */
	public static function SetLineHeight($control, $height){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetLetterSpacing($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $letterSpacing
	 * @return \System\Void|void
	 */
	public static function SetLetterSpacing($control, $letterSpacing){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Int32|int
	 */
	public static function GetMaxLines($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Int32|int $maxLines
	 * @return \System\Void|void
	 */
	public static function SetMaxLines($control, $maxLines){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @return \System\Void|void
	 */
	protected function RenderCore($context){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	protected function RenderTextLayout($context, $origin){}
	/**
	 * @return \System\Void|void
	 */
	protected function ClearTextInternal(){}
	/**
	 * @param \System\String|string $text
	 * @return \Avalonia\Media\TextFormatting\TextLayout
	 */
	protected function CreateTextLayout($text){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateTextLayout(){}
	private static function IsValidMaxLines($maxLines){}
	private static function IsValidLineHeight($lineHeight){}
	private static function IsValidLineSpacing($lineSpacing){}
	private function OnInlinesChanged($oldValue, $newValue){}
	private function Invalidate(){}
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