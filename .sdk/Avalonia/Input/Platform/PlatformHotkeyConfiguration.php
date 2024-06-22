<?php
namespace Avalonia\Input\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RawPointerPointOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Input\KeyModifiers $commandModifiers
	 * @param \Avalonia\Input\KeyModifiers $selectionModifiers
	 * @param \Avalonia\Input\KeyModifiers $wholeWordTextActionModifiers
	 */
	#[MethodOverride]public function __construct_2 ($commandModifiers, $selectionModifiers, $wholeWordTextActionModifiers){}
}
final class PlatformHotkeyConfiguration extends \System\Object
{
	use RawPointerPointOverride;

	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 */
	public $CommandModifiers;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 */
	public $WholeWordTextActionModifiers;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 */
	public $SelectionModifiers;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $Copy;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $Cut;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $Paste;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $Undo;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $Redo;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $SelectAll;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $MoveCursorToTheStartOfLine;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $MoveCursorToTheEndOfLine;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $MoveCursorToTheStartOfDocument;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $MoveCursorToTheEndOfDocument;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $MoveCursorToTheStartOfLineWithSelection;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $MoveCursorToTheEndOfLineWithSelection;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $MoveCursorToTheStartOfDocumentWithSelection;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $MoveCursorToTheEndOfDocumentWithSelection;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $OpenContextMenu;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $Back;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $PageUp;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $PageDown;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $PageRight;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyGesture]
	 */
	public $PageLeft;
	/**
	 * @uses PlatformHotkeyConfigurationOverride::__construct_1 <br>public , args: ()<br>
	 * @uses PlatformHotkeyConfigurationOverride::__construct_2 <br>public , args: ($commandModifiers, $selectionModifiers, $wholeWordTextActionModifiers)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}