<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StyledElementOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Controls\Classes
	 */
	#[MethodOverride]public function get_Classes_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride]private function get_Classes_2 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride]protected function get_LogicalChildren_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride]private function get_LogicalChildren_2 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function NotifyResourcesChanged_1 ($e){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @param \System\Boolean|bool $propagate
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function NotifyResourcesChanged_2 ($e, $propagate){}
	/**
	 * @deprecated
	 * @param \Avalonia\LogicalTree\ILogical $parent
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetParent_1 ($parent){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $parent
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetParent_2 ($parent){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\Boolean|bool $updateStarted
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function DataContextNotifying_1 ($o, $updateStarted){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean|bool $updateStarted
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function DataContextNotifying_2 ($element, $updateStarted){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ApplyControlTheme_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\ControlTheme $theme
	 * @param \Avalonia\PropertyStore\FrameType $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ApplyControlTheme_2 ($theme, $type){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles [generic: Avalonia\Styling\IStyle]
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]private static function RecurseStyles_1 ($styles){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles [generic: Avalonia\Styling\IStyle]
	 * @param \System\Collections\Generic\List_1 $result [generic: Avalonia\Styling\StyleBase]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function RecurseStyles_2 ($styles, $result){}
}
class StyledElement extends \Avalonia\Animation\Animatable implements
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
	use StyledElementOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 */
	public static $DataContextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\StyledElement,System\String]
	 */
	public static $NameProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\StyledElement,Avalonia\StyledElement]
	 */
	public static $ParentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\StyledElement,Avalonia\AvaloniaObject]
	 */
	public static $TemplatedParentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ControlTheme]
	 */
	public static $ThemeProperty;
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
	 * @param \System\EventHandler_1 $value [generic: Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs]
	 * @return \System\Void|void
	 */
	public function add_AttachedToLogicalTree($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_AttachedToLogicalTree($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs]
	 * @return \System\Void|void
	 */
	public function add_DetachedFromLogicalTree($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_DetachedFromLogicalTree($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_DataContextChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_DataContextChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Initialized($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Initialized($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ResourcesChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_ResourcesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ResourcesChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_ResourcesChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ActualThemeVariantChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ActualThemeVariantChanged($value){}
	/**
	 * @uses StyledElementOverride::get_Classes_1 <br>public , args: ()<br>
	 * @uses StyledElementOverride::get_Classes_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Controls\Classes|\Avalonia\Collections\IAvaloniaReadOnlyList_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Classes (){}
	/**
	 * @uses StyledElementOverride::get_LogicalChildren_1 <br>protected , args: ()<br>
	 * @uses StyledElementOverride::get_LogicalChildren_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Collections\IAvaloniaList_1|\Avalonia\Collections\IAvaloniaReadOnlyList_1|mixed|\override
	 */
	#[MethodOverrideProtected]function get_LogicalChildren (){}
	private function get_IsAttachedToLogicalTree(){}
	private function get_LogicalParent(){}
	private function get_HasResources(){}
	private function get_IsStylesInitialized(){}
	private function get_StylingParent(){}
	/**
	 * @return \System\Void|void
	 */
	public function BeginInit(){}
	/**
	 * @return \System\Void|void
	 */
	public function EndInit(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function ApplyStyling(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InitializeIfNeeded(){}
	/**
	 * @return \Avalonia\Diagnostics\StyleDiagnostics
	 */
	protected function GetStyleDiagnosticsInternal(){}
	private function NotifyAttachedToLogicalTree($e){}
	private function NotifyDetachedFromLogicalTree($e){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StyledElementOverride::NotifyResourcesChanged_1 <br>private , args: ($e)<br>
	 * @uses StyledElementOverride::NotifyResourcesChanged_2 <br>private , args: ($e, $propagate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function NotifyResourcesChanged (\override ...$args){}
	private function NotifyHostedResourcesChanged($e){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetResource($key, $theme, &$value){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StyledElementOverride::SetParent_1 <br>private , args: ($parent)<br>
	 * @uses StyledElementOverride::SetParent_2 <br>private , args: ($parent)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function SetParent (\override ...$args){}
	private function StylesAdded($styles){}
	private function StylesRemoved($styles){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function LogicalChildrenCollectionChanged($sender, $e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function NotifyChildResourcesChanged($e){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnAttachedToLogicalTree($e){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDetachedFromLogicalTree($e){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDataContextChanged($e){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnDataContextBeginUpdate(){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnDataContextEndUpdate(){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnInitialized(){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnControlThemeChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnTemplatedParentControlThemeChanged(){}
	/**
	 * @return \Avalonia\Styling\ControlTheme
	 */
	protected function GetEffectiveTheme(){}
	/**
	 * @param \System\Boolean|bool $recurse
	 * @return \System\Void|void
	 */
	protected function InvalidateStyles($recurse){}
	/**
	 * @param \Avalonia\StyledElement $e
	 * @return \System\Type
	 */
	protected static function GetStyleKey($e){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StyledElementOverride::DataContextNotifying_1 <br>private , args: ($o, $updateStarted)<br>
	 * @uses StyledElementOverride::DataContextNotifying_2 <br>private , args: ($element, $updateStarted)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function DataContextNotifying (\override ...$args){}
	private static function FindLogicalRoot($e){}
	private static function ValidateLogicalChild($c){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StyledElementOverride::ApplyControlTheme_1 <br>private , args: ()<br>
	 * @uses StyledElementOverride::ApplyControlTheme_2 <br>private , args: ($theme, $type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function ApplyControlTheme (\override ...$args){}
	private function ApplyTemplatedParentControlTheme(){}
	private function ApplyStyles($host){}
	private function ApplyStyle($style, $host, $type){}
	private function ReevaluateImplicitTheme(){}
	private function OnAttachedToLogicalTreeCore($e){}
	private function OnDetachedFromLogicalTreeCore($e){}
	private function OnDataContextChangedCore($e){}
	private function SetLogicalParent($children){}
	private function ClearLogicalParent($children){}
	private function DetachStyles($styles){}
	private static function FlattenStyles($styles){}
	private static function HasSettersOrAnimations($styles){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StyledElementOverride::RecurseStyles_1 <br>private , args: ($styles)<br>
	 * @uses StyledElementOverride::RecurseStyles_2 <br>private , args: ($styles, $result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IReadOnlyList_1|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function RecurseStyles (\override ...$args){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}