<?php
namespace Avalonia\Input\Platform;
/**
 */
class PlatformHotkeyConfiguration extends \System\Object
{
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public $CommandModifiers;
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public $WholeWordTextActionModifiers;
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public $SelectionModifiers;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $Copy;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $Cut;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $Paste;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $Undo;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $Redo;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $SelectAll;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $MoveCursorToTheStartOfLine;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $MoveCursorToTheEndOfLine;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $MoveCursorToTheStartOfDocument;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $MoveCursorToTheEndOfDocument;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $MoveCursorToTheStartOfLineWithSelection;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $MoveCursorToTheEndOfLineWithSelection;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $MoveCursorToTheStartOfDocumentWithSelection;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $MoveCursorToTheEndOfDocumentWithSelection;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $OpenContextMenu;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $Back;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $PageUp;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $PageDown;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $PageRight;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 * @property
	 */
	public $PageLeft;
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_CommandModifiers(){}
	/**
	 * @param \Avalonia\Input\KeyModifiers $value
	 * @return \System\Void|void
	 */
	public  function set_CommandModifiers($value){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_WholeWordTextActionModifiers(){}
	/**
	 * @param \Avalonia\Input\KeyModifiers $value
	 * @return \System\Void|void
	 */
	public  function set_WholeWordTextActionModifiers($value){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_SelectionModifiers(){}
	/**
	 * @param \Avalonia\Input\KeyModifiers $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionModifiers($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Copy(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Copy($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Cut(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Cut($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Paste(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Paste($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Undo(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Undo($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Redo(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Redo($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_SelectAll(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_SelectAll($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_MoveCursorToTheStartOfLine(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MoveCursorToTheStartOfLine($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_MoveCursorToTheEndOfLine(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MoveCursorToTheEndOfLine($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_MoveCursorToTheStartOfDocument(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MoveCursorToTheStartOfDocument($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_MoveCursorToTheEndOfDocument(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MoveCursorToTheEndOfDocument($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_MoveCursorToTheStartOfLineWithSelection(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MoveCursorToTheStartOfLineWithSelection($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_MoveCursorToTheEndOfLineWithSelection(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MoveCursorToTheEndOfLineWithSelection($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_MoveCursorToTheStartOfDocumentWithSelection(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MoveCursorToTheStartOfDocumentWithSelection($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_MoveCursorToTheEndOfDocumentWithSelection(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MoveCursorToTheEndOfDocumentWithSelection($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_OpenContextMenu(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_OpenContextMenu($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Back(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Back($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_PageUp(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PageUp($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_PageDown(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PageDown($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_PageRight(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PageRight($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_PageLeft(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PageLeft($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
