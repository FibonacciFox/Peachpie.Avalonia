<?php
namespace Avalonia\Platform;
/**
 */
class InProcessDragSource extends \System\Object implements 
	\Avalonia\Input\Platform\IPlatformDragSource
{
	/**
	 * @param \Avalonia\Input\PointerEventArgs $triggerEvent
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $allowedEffects
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function DoDragDrop($triggerEvent, $data, $allowedEffects){}
	/**
	 * @param \Avalonia\Input\Raw\RawDragEventType $type
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $pt
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseEventAndUpdateCursor($type, $root, $pt, $modifiers){}
	/**
	 * @param \Avalonia\Input\DragDropEffects $effect
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPreferredEffect($effect, $modifiers){}
	/**
	 * @param \Avalonia\Input\DragDropEffects $effects
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCursorForDropEffect($effects){}
	/**
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Input\DragDropEffects $effect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateCursor($root, $effect){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CancelDragging(){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessKeyEvents($e){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessMouseEvents($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
