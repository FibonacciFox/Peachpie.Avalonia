<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Span_1Override {
	/**
	 * @param \System\Span_1 $span [generic: T]
	 */
	#[MethodOverride]public function __construct_1 ($span){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($span){}
}
final class SpanDebugView_1 extends \System\Object
{
	use Span_1Override;
	/**
	 * @property
	 * @var \T[]
	 * @since readonly
	 */
	public $Items;
	/**
	 * @uses SpanDebugView_1Override::__construct_1 <br>public , args: ($span)<br>
	 * @uses SpanDebugView_1Override::__construct_2 <br>public , args: ($span)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}