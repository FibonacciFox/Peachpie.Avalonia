<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeNameParserOverride {
	/**
	 * @param \System\Object|object $target
	 */
	#[MethodOverride]public function __construct_1 ($target){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Boolean|bool $trackResurrection
	 */
	#[MethodOverride]public function __construct_2 ($target, $trackResurrection){}
}
class WeakReference extends \System\Object implements
	\System\Runtime\Serialization\ISerializable
{
	use TypeNameParserOverride;

	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $m_handle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAlive;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $TrackResurrection;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Target;
	private function Create($target, $trackResurrection){}
	private function IsTrackResurrection(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @uses WeakReferenceOverride::__construct_1 <br>public , args: ($target)<br>
	 * @uses WeakReferenceOverride::__construct_2 <br>public , args: ($target, $trackResurrection)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}