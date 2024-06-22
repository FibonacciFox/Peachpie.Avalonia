<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SpanVectorOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $first
	 * @param \System\Int32|int $length
	 * @param \System\Object|object $element
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_1 ($first, $length, $element){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $first
	 * @param \System\Int32|int $length
	 * @param \System\Object|object $element
	 * @param \Avalonia\Utilities\SpanPosition $spanPosition
	 * @return \Avalonia\Utilities\SpanPosition
	 */
	#[MethodOverride]public function SetValue_2 ($first, $length, $element, $spanPosition){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $first
	 * @param \System\Int32|int $length
	 * @param \System\Object|object $element
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetReference_1 ($first, $length, $element){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $first
	 * @param \System\Int32|int $length
	 * @param \System\Object|object $element
	 * @param \Avalonia\Utilities\SpanPosition $spanPosition
	 * @return \Avalonia\Utilities\SpanPosition
	 */
	#[MethodOverride]public function SetReference_2 ($first, $length, $element, $spanPosition){}
}
class SpanVector extends \System\Object implements
	\System\Collections\IEnumerable
{
	use SpanVectorOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Default;
	/**
	 * @property
	 * @var \Avalonia\Utilities\Span
	 * @since readonly
	 */
	public $Item;
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public function GetEnumerator(){}
	private function Add($span){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \Avalonia\Utilities\SpanPosition& $latestPosition
	 * @return \System\Void|void
	 */
	protected function Delete($index, $count, $latestPosition){}
	private function DeleteInternal($index, $count){}
	private function Insert($index, $count){}
	/**
	 * @param \System\Int32|int $cp
	 * @param \Avalonia\Utilities\SpanPosition $latestPosition
	 * @param \Avalonia\Utilities\SpanPosition& &$spanPosition
	 * @return \System\Boolean|bool
	 */
	protected function FindSpan($cp, $latestPosition, &$spanPosition){}
	/**
	 * @uses SpanVectorOverride::SetValue_1 <br>public , args: ($first, $length, $element)<br>
	 * @uses SpanVectorOverride::SetValue_2 <br>public , args: ($first, $length, $element, $spanPosition)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\Avalonia\Utilities\SpanPosition|mixed|\override
	 */
	#[MethodOverridePublic]function SetValue (\override ...$args){}
	/**
	 * @uses SpanVectorOverride::SetReference_1 <br>public , args: ($first, $length, $element)<br>
	 * @uses SpanVectorOverride::SetReference_2 <br>public , args: ($first, $length, $element, $spanPosition)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\Avalonia\Utilities\SpanPosition|mixed|\override
	 */
	#[MethodOverridePublic]function SetReference (\override ...$args){}
	private function Set($first, $length, $element, $equals, $spanPosition){}
	private function Resize($targetCount){}
}