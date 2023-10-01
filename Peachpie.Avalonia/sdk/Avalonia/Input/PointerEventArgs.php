<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PointerEventArgsMethodsOverride
{
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] private  function GetPosition_1($pt, $relativeTo){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public  function GetPosition_2($relativeTo){}
}
/**
 */
class PointerEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @return \Avalonia\Input\IPointer
	 */
	public  function get_Pointer(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_Timestamp(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsGestureRecognitionSkipped(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsGestureRecognitionSkipped($value){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_KeyModifiers(){}
	/**
	 * @uses PointerEventArgsMethodsOverride::GetPosition_1 ($pt, $relativeTo)
	 * @uses PointerEventArgsMethodsOverride::GetPosition_2 ($relativeTo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPosition(mixed ...$args){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \Avalonia\Input\PointerPoint
	 */
	public  function GetCurrentPoint($relativeTo){}
	/**
	 * @param \Avalonia\Visual $relativeTo
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetIntermediatePoints($relativeTo){}
	/**
	 * @return \System\Void|void
	 */
	public  function PreventGestureRecognition(){}
	/**
	 * @return \Avalonia\Input\PointerPointProperties
	 */
	protected  function get_Properties(){}
}
