<?php
namespace Avalonia\Input\GestureRecognizers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GestureRecognizerCollectionMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 */
class GestureRecognizerCollection extends \System\Object implements 
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @param \Avalonia\Input\GestureRecognizers\GestureRecognizer $recognizer
	 * @return \System\Void|void
	 */
	public  function Add($recognizer){}
	/**
	 * @uses GestureRecognizerCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses GestureRecognizerCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function HandlePointerPressed($e){}
	/**
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function HandlePointerReleased($e){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function HandlePointerMoved($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
