<?php
namespace Avalonia\Collections\Pooled;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PooledStack_1Override {
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $span [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($span){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_3 ($array, $arrayIndex){}
	/**
	 * @deprecated
	 * @return \Avalonia\Collections\Pooled\PooledStack_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 */
	#[MethodOverride]public function __construct_2 ($clearMode){}
	/**
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_3 ($customPool){}
	/**
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_4 ($clearMode, $customPool){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_5 ($capacity){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 */
	#[MethodOverride]public function __construct_6 ($capacity, $clearMode){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_7 ($capacity, $customPool){}
	/**
	 * @param \System\Int32|int $capacity
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_8 ($capacity, $clearMode, $customPool){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $enumerable [generic: T]
	 */
	#[MethodOverride]public function __construct_9 ($enumerable){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $enumerable [generic: T]
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 */
	#[MethodOverride]public function __construct_10 ($enumerable, $clearMode){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $enumerable [generic: T]
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_11 ($enumerable, $customPool){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $enumerable [generic: T]
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_12 ($enumerable, $clearMode, $customPool){}
	/**
	 * @param \T $array
	 */
	#[MethodOverride]public function __construct_13 ($array){}
	/**
	 * @param \T $array
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 */
	#[MethodOverride]public function __construct_14 ($array, $clearMode){}
	/**
	 * @param \T $array
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_15 ($array, $customPool){}
	/**
	 * @param \T $array
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_16 ($array, $clearMode, $customPool){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 */
	#[MethodOverride]public function __construct_17 ($span){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 */
	#[MethodOverride]public function __construct_18 ($span, $clearMode){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_19 ($span, $customPool){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 * @param \Avalonia\Collections\Pooled\ClearMode $clearMode
	 * @param \System\Buffers\ArrayPool_1 $customPool [generic: T]
	 */
	#[MethodOverride]public function __construct_20 ($span, $clearMode, $customPool){}
}
class PooledStack_1 extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\IDisposable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	use PooledStack_1Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Collections\Pooled\ClearMode
	 * @since readonly
	 */
	public $ClearMode;
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @param \System\Func_2 $match [generic: T,System\Boolean]
	 * @return \System\Int32|int
	 */
	public function RemoveWhere($match){}
	/**
	 * @uses PooledStack_1Override::CopyTo_1 <br>public , args: ($array, $arrayIndex)<br>
	 * @uses PooledStack_1Override::CopyTo_2 <br>public , args: ($span)<br>
	 * @uses PooledStack_1Override::CopyTo_3 <br>private , args: ($array, $arrayIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses PooledStack_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses PooledStack_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses PooledStack_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Collections\Pooled\PooledStack_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \System\Void|void
	 */
	public function TrimExcess(){}
	/**
	 * @return \T|object
	 */
	public function Peek(){}
	/**
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryPeek(&$result){}
	/**
	 * @return \T|object
	 */
	public function Pop(){}
	/**
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryPop(&$result){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Push($item){}
	private function PushWithResize($item){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	private function ThrowForEmptyStack(){}
	private function ReturnArray($replaceWith){}
	private static function ShouldClear($mode){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function OnDeserialization($sender){}
	/**
	 * @uses PooledStack_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses PooledStack_1Override::__construct_2 <br>public , args: ($clearMode)<br>
	 * @uses PooledStack_1Override::__construct_3 <br>public , args: ($customPool)<br>
	 * @uses PooledStack_1Override::__construct_4 <br>public , args: ($clearMode, $customPool)<br>
	 * @uses PooledStack_1Override::__construct_5 <br>public , args: ($capacity)<br>
	 * @uses PooledStack_1Override::__construct_6 <br>public , args: ($capacity, $clearMode)<br>
	 * @uses PooledStack_1Override::__construct_7 <br>public , args: ($capacity, $customPool)<br>
	 * @uses PooledStack_1Override::__construct_8 <br>public , args: ($capacity, $clearMode, $customPool)<br>
	 * @uses PooledStack_1Override::__construct_9 <br>public , args: ($enumerable)<br>
	 * @uses PooledStack_1Override::__construct_10 <br>public , args: ($enumerable, $clearMode)<br>
	 * @uses PooledStack_1Override::__construct_11 <br>public , args: ($enumerable, $customPool)<br>
	 * @uses PooledStack_1Override::__construct_12 <br>public , args: ($enumerable, $clearMode, $customPool)<br>
	 * @uses PooledStack_1Override::__construct_13 <br>public , args: ($array)<br>
	 * @uses PooledStack_1Override::__construct_14 <br>public , args: ($array, $clearMode)<br>
	 * @uses PooledStack_1Override::__construct_15 <br>public , args: ($array, $customPool)<br>
	 * @uses PooledStack_1Override::__construct_16 <br>public , args: ($array, $clearMode, $customPool)<br>
	 * @uses PooledStack_1Override::__construct_17 <br>public , args: ($span)<br>
	 * @uses PooledStack_1Override::__construct_18 <br>public , args: ($span, $clearMode)<br>
	 * @uses PooledStack_1Override::__construct_19 <br>public , args: ($span, $customPool)<br>
	 * @uses PooledStack_1Override::__construct_20 <br>public , args: ($span, $clearMode, $customPool)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}