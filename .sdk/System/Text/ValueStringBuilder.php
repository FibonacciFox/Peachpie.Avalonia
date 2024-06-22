<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ValueStringBuilderOverride {
	/**
	 * @deprecated
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public function AsSpan_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public function AsSpan_2 ($start){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public function AsSpan_3 ($start, $length){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Append_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Append_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\Char* $value
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Append_3 ($value, $length){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Append_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\Rune $rune
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Append_5 ($rune){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function GrowAndAppend_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\Text\Rune $rune
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function GrowAndAppend_2 ($rune){}
	/**
	 * @param \System\Span_1 $initialBuffer [generic: System\Char]
	 */
	#[MethodOverride]public function __construct_1 ($initialBuffer){}
	/**
	 * @param \System\Int32|int $initialCapacity
	 */
	#[MethodOverride]public function __construct_2 ($initialCapacity){}
}
final class ValueStringBuilder extends \System\ValueType
{
	use ValueStringBuilderOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Char&
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Span_1[System\Char]
	 * @since readonly
	 */
	public $RawChars;
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Void|void
	 */
	public function EnsureCapacity($capacity){}
	/**
	 * @return \System\Char&
	 */
	public function GetPinnableReference(){}
	/**
	 * @uses ValueStringBuilderOverride::AsSpan_1 <br>public , args: ()<br>
	 * @uses ValueStringBuilderOverride::AsSpan_2 <br>public , args: ($start)<br>
	 * @uses ValueStringBuilderOverride::AsSpan_3 <br>public , args: ($start, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function AsSpan (\override ...$args){}
	/**
	 * @uses ValueStringBuilderOverride::Append_1 <br>public , args: ($c)<br>
	 * @uses ValueStringBuilderOverride::Append_2 <br>public , args: ($s)<br>
	 * @uses ValueStringBuilderOverride::Append_3 <br>public , args: ($value, $length)<br>
	 * @uses ValueStringBuilderOverride::Append_4 <br>public , args: ($value)<br>
	 * @uses ValueStringBuilderOverride::Append_5 <br>public , args: ($rune)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Append (\override ...$args){}
	private function AppendSlow($s){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Span_1[System\Char]
	 */
	public function AppendSpan($length){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ValueStringBuilderOverride::GrowAndAppend_1 <br>private , args: ($c)<br>
	 * @uses ValueStringBuilderOverride::GrowAndAppend_2 <br>private , args: ($rune)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function GrowAndAppend (\override ...$args){}
	private function Grow($additionalCapacityBeyondPos){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses ValueStringBuilderOverride::__construct_1 <br>public , args: ($initialBuffer)<br>
	 * @uses ValueStringBuilderOverride::__construct_2 <br>public , args: ($initialCapacity)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}