<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DragDropDeviceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ProcessRawEvent_1($e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ProcessRawEvent_2($e){}
}
/**
 */
class DragDropDevice extends \System\Object implements 
	\Avalonia\Input\Raw\IDragDropDevice,
	\Avalonia\Input\IInputDevice
{
	/**
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $local
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTarget($root, $local){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $target
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Interactivity\RoutedEvent_1 $routedEvent
	 * @param \Avalonia\Input\DragDropEffects $operation
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RaiseDragEvent($target, $inputRoot, $point, $routedEvent, $operation, $data, $modifiers){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $effects
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DragEnter($inputRoot, $point, $data, $effects, $modifiers){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $effects
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DragOver($inputRoot, $point, $data, $effects, $modifiers){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $effects
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DragLeave($inputRoot, $point, $data, $effects, $modifiers){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $effects
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Drop($inputRoot, $point, $data, $effects, $modifiers){}
	/**
	 * @uses DragDropDeviceMethodsOverride::ProcessRawEvent_1 ($e)
	 * @uses DragDropDeviceMethodsOverride::ProcessRawEvent_2 ($e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ProcessRawEvent(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
