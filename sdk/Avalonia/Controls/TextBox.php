<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextBoxMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddHandler_1($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddHandler_2($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveHandler_1($routedEvent, $handler){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveHandler_2($routedEvent, $handler){}
	/**
	 * @return \Avalonia\Controls\Classes
	 */
	#[MethodOverride] public  function get_Classes_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_Classes_2(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] protected  function get_LogicalChildren_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetParent_1($parent){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetParent_2($parent){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function add_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function remove_PropertyChanged_2($value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_1($property){}
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	#[MethodOverride] public  function get_Item_2($binding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_2($binding, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_1($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_2($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_3($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_4($property){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_2($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_3($property){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_1($property, $value, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_2($property, $value, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_2($property, $value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_1($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_2($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_3($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_4($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_5($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_6($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_7($property, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_1($property, $oldValue, $newValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_2($property, $oldValue, $newValue, $priority, $isEffectiveValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_2($property, $value){}
}
/**
 */
class TextBox extends \Avalonia\Controls\Primitives\TemplatedControl implements 
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
	\Avalonia\Controls\Utils\IUndoRedoHost
{
	/**
	 * @return \Avalonia\Input\KeyGesture
	 */
	public static function get_CutGesture(){}
	/**
	 * @return \Avalonia\Input\KeyGesture
	 */
	public static function get_CopyGesture(){}
	/**
	 * @return \Avalonia\Input\KeyGesture
	 */
	public static function get_PasteGesture(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AcceptsReturn(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AcceptsReturn($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AcceptsTab(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AcceptsTab($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CaretIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_CaretIndex($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCaretIndexChanged($e){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsReadOnly($value){}
	/**
	 * @return \System\Char
	 */
	public  function get_PasswordChar(){}
	/**
	 * @param \System\Char $value
	 * @return \System\Void|void
	 */
	public  function set_PasswordChar($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_SelectionBrush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionBrush($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_SelectionForegroundBrush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionForegroundBrush($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_CaretBrush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_CaretBrush($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SelectionStart(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionStart($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectionStartChanged($e){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SelectionEnd(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionEnd($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectionEndChanged($e){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxLength(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_MaxLength($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxLines(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_MaxLines($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LetterSpacing(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_LetterSpacing($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LineHeight(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_LineHeight($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Text(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Text($value){}
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CoerceText($sender, $value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_SelectedText(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedText($value){}
	/**
	 * @return \Avalonia\Layout\HorizontalAlignment
	 */
	public  function get_HorizontalContentAlignment(){}
	/**
	 * @param \Avalonia\Layout\HorizontalAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalContentAlignment($value){}
	/**
	 * @return \Avalonia\Layout\VerticalAlignment
	 */
	public  function get_VerticalContentAlignment(){}
	/**
	 * @param \Avalonia\Layout\VerticalAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalContentAlignment($value){}
	/**
	 * @return \Avalonia\Media\TextAlignment
	 */
	public  function get_TextAlignment(){}
	/**
	 * @param \Avalonia\Media\TextAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_TextAlignment($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Watermark(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Watermark($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseFloatingWatermark(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_UseFloatingWatermark($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_InnerLeftContent(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_InnerLeftContent($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_InnerRightContent(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_InnerRightContent($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_RevealPassword(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_RevealPassword($value){}
	/**
	 * @return \Avalonia\Media\TextWrapping
	 */
	public  function get_TextWrapping(){}
	/**
	 * @param \Avalonia\Media\TextWrapping $value
	 * @return \System\Void|void
	 */
	public  function set_TextWrapping($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NewLine(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_NewLine($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearSelection(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanCut(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CanCut($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanCopy(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CanCopy($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanPaste(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CanPaste($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUndoEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsUndoEnabled($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_UndoLimit(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_UndoLimit($value){}
	/**
	 * @param \System\Int32|int $newValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnUndoLimitChanged($newValue){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanUndo(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CanUndo($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanRedo(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CanRedo($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_CopyingToClipboard($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_CopyingToClipboard($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_CuttingToClipboard($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_CuttingToClipboard($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_PastingFromClipboard($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_PastingFromClipboard($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_TextChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_TextChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_TextChanging($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_TextChanging($value){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PresenterPropertyChanged($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateCommandStates(){}
	/**
	 * @param \System\String|string $input
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleTextInput($input){}
	/**
	 * @param \System\String|string $text
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveInvalidCharacters($text){}
	/**
	 * @return \System\Void|void
	 */
	public  function Cut(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Copy(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Paste(){}
	/**
	 * @param \System\Int32|int $caretIndex
	 * @param \System\Int32& $selectionStart
	 * @param \System\Int32& $selectionEnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateWordSelectionRange($caretIndex, $selectionStart, $selectionEnd){}
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	protected static function CoerceCaretIndex($sender, $value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Int32|int $direction
	 * @param \System\Boolean $wholeWord
	 * @param \System\Boolean $isSelecting
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveHorizontal($direction, $wholeWord, $isSelecting){}
	/**
	 * @param \System\Boolean $document
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveHome($document){}
	/**
	 * @param \System\Boolean $document
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveEnd($document){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MovePageRight(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MovePageLeft(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MovePageUp(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MovePageDown(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SelectAll(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSelectionRange(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function DeleteSelection(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSelection(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetVerticalSpaceBetweenScrollViewerAndPresenter(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseTextChangeEvents(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetSelectionForControlBackspace(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetSelectionForControlDelete(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdatePseudoclasses(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsPasswordBox(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UndoRedoState(){}
	/**
	 * @param \Avalonia\Controls\UndoRedoState $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_UndoRedoState($value){}
	/**
	 * @param \System\Boolean $ignoreChangeCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SnapshotUndoRedo($ignoreChangeCount){}
	/**
	 * @return \System\Void|void
	 */
	public  function Undo(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Redo(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnUndoStackChanged(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRedoStackChanged(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsDataTemplatesInitialized(){}
	/**
	 * @param \Avalonia\Styling\SetterBase $setter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($setter){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureInitialized(){}
	/**
	 * @uses TextBoxMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses TextBoxMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses TextBoxMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::get_Classes_1 ()
	 * @uses TextBoxMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::get_LogicalChildren_1 ()
	 * @uses TextBoxMethodsOverride::get_LogicalChildren_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsAttachedToLogicalTree(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LogicalParent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsStylesInitialized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_StylingParent(){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyAttachedToLogicalTree($e){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyDetachedFromLogicalTree($e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyResourcesChanged($e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyHostedResourcesChanged($e){}
	/**
	 * @uses TextBoxMethodsOverride::SetParent_1 ($parent)
	 * @uses TextBoxMethodsOverride::SetParent_2 ($parent)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetParent(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StylesAdded($styles){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StylesRemoved($styles){}
	/**
	 * @uses TextBoxMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TextBoxMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TextBoxMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::get_Item_1 ($property)
	 * @uses TextBoxMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TextBoxMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::ClearValue_1 ($property)
	 * @uses TextBoxMethodsOverride::ClearValue_2 ($property)
	 * @uses TextBoxMethodsOverride::ClearValue_3 ($property)
	 * @uses TextBoxMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::GetValue_1 ($property)
	 * @uses TextBoxMethodsOverride::GetValue_2 ($property)
	 * @uses TextBoxMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TextBoxMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TextBoxMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TextBoxMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TextBoxMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TextBoxMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TextBoxMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TextBoxMethodsOverride::Bind_5 ($property, $source)
	 * @uses TextBoxMethodsOverride::Bind_6 ($property, $source)
	 * @uses TextBoxMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TextBoxMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TextBoxMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TextBoxMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TextBoxMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
