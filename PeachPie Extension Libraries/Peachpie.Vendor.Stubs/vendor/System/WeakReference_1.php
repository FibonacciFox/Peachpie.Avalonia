<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeNameParserOverride {
	/**
	 * @param \T|object $target
	 */
	#[MethodOverride]public function __construct_1 ($target){}
	/**
	 * @param \T|object $target
	 * @param \System\Boolean|bool $trackResurrection
	 */
	#[MethodOverride]public function __construct_2 ($target, $trackResurrection){}
}
final class WeakReference_1 extends \System\Object implements
	\System\Runtime\Serialization\ISerializable
{
	use TypeNameParserOverride;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $m_handle;
	/**
	 * @param \T|object $target
	 * @return \System\Void|void
	 */
	public function SetTarget($target){}
	private function Create($target, $trackResurrection){}
	private function IsTrackResurrection(){}
	/**
	 * @param \T& &$target
	 * @return \System\Boolean|bool
	 */
	public function TryGetTarget(&$target){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @uses WeakReference_1Override::__construct_1 <br>public , args: ($target)<br>
	 * @uses WeakReference_1Override::__construct_2 <br>public , args: ($target, $trackResurrection)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}