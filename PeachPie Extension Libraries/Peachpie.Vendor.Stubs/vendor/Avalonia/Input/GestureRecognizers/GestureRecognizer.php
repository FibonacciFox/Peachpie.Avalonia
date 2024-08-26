<?php
namespace Avalonia\Input\GestureRecognizers;
class GestureRecognizer extends \Avalonia\StyledElement implements
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
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	abstract protected function PointerPressed($e);
	/**
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	abstract protected function PointerReleased($e);
	/**
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	abstract protected function PointerMoved($e);
	/**
	 * @param \Avalonia\Input\IPointer $pointer
	 * @return \System\Void|void
	 */
	abstract protected function PointerCaptureLost($pointer);
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function PointerPressedInternal($e){}
	/**
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function PointerReleasedInternal($e){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected function PointerMovedInternal($e){}
	/**
	 * @param \Avalonia\Input\IPointer $pointer
	 * @return \System\Void|void
	 */
	protected function PointerCaptureLostInternal($pointer){}
	/**
	 * @param \Avalonia\Input\IPointer $pointer
	 * @return \System\Void|void
	 */
	protected function Capture($pointer){}
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