<?php
namespace Avalonia\Input\GestureRecognizers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GestureRecognizerCollectionOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
class GestureRecognizerCollection extends \System\Object implements
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use GestureRecognizerCollectionOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @param \Avalonia\Input\GestureRecognizers\GestureRecognizer $recognizer
	 * @return \System\Void|void
	 */
	public function Add($recognizer){}
	/**
	 * @uses GestureRecognizerCollectionOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses GestureRecognizerCollectionOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Boolean|bool
	 */
	protected function HandlePointerPressed($e){}
	/**
	 * @param \Avalonia\Input\IPointer $pointer
	 * @return \System\Void|void
	 */
	protected function HandleCaptureLost($pointer){}
	/**
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Boolean|bool
	 */
	protected function HandlePointerReleased($e){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Boolean|bool
	 */
	protected function HandlePointerMoved($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $inputElement
	 */
	public function __construct($inputElement){}
}