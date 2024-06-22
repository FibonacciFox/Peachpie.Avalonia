<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SpanRiderOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $cp
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function At_1 ($cp){}
	/**
	 * @deprecated
	 * @param \Avalonia\Utilities\SpanPosition $latestPosition
	 * @param \System\Int32|int $cp
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function At_2 ($latestPosition, $cp){}
	/**
	 * @param \Avalonia\Utilities\SpanVector $spans
	 * @param \Avalonia\Utilities\SpanPosition $latestPosition
	 */
	#[MethodOverride]public function __construct_1 ($spans, $latestPosition){}
	/**
	 * @param \Avalonia\Utilities\SpanVector $spans
	 * @param \Avalonia\Utilities\SpanPosition $latestPosition
	 * @param \System\Int32|int $cp
	 */
	#[MethodOverride]public function __construct_2 ($spans, $latestPosition, $cp){}
}
final class SpanRider extends \System\ValueType
{
	use SpanRiderOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CurrentSpanStart;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $CurrentPosition;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $CurrentElement;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CurrentSpanIndex;
	/**
	 * @property
	 * @var \Avalonia\Utilities\SpanPosition
	 * @since readonly
	 */
	public $SpanPosition;
	/**
	 * @uses SpanRiderOverride::At_1 <br>public , args: ($cp)<br>
	 * @uses SpanRiderOverride::At_2 <br>public , args: ($latestPosition, $cp)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function At (\override ...$args){}
	/**
	 * @uses SpanRiderOverride::__construct_1 <br>public , args: ($spans, $latestPosition)<br>
	 * @uses SpanRiderOverride::__construct_2 <br>public , args: ($spans, $latestPosition, $cp)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}