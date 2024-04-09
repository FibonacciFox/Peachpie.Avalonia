<?php
namespace System\Runtime\Serialization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SerializationInfoEnumeratorOverride {
	/**
	 * @param \System\Runtime\Serialization\StreamingContextStates $state
	 */
	#[MethodOverride]public function __construct_1 ($state){}
	/**
	 * @param \System\Runtime\Serialization\StreamingContextStates $state
	 * @param \System\Object|object $additional
	 */
	#[MethodOverride]public function __construct_2 ($state, $additional){}
}
final class StreamingContext extends \System\ValueType
{
	use SerializationInfoEnumeratorOverride;
	/**
	 * @property
	 * @var \System\Runtime\Serialization\StreamingContextStates
	 * @since readonly
	 */
	public $State;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Context;
	/**
	 * @uses StreamingContextOverride::__construct_1 <br>public , args: ($state)<br>
	 * @uses StreamingContextOverride::__construct_2 <br>public , args: ($state, $additional)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}