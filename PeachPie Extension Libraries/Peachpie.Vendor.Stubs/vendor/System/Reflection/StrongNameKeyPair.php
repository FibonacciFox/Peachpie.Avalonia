<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SignatureTypeExtensionsOverride {
	/**
	 * @param \System\IO\FileStream $keyPairFile
	 */
	#[MethodOverride]public function __construct_1 ($keyPairFile){}
	/**
	 * @param \System\Byte $keyPairArray
	 */
	#[MethodOverride]public function __construct_2 ($keyPairArray){}
	/**
	 * @param \System\String|string $keyPairContainer
	 */
	#[MethodOverride]public function __construct_3 ($keyPairContainer){}
}
class StrongNameKeyPair extends \System\Object implements
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Runtime\Serialization\ISerializable
{
	use SignatureTypeExtensionsOverride;
	/**
	 * @property
	 * @var \System\Byte[]
	 * @since readonly
	 */
	public $PublicKey;
	private function GetObjectData($info, $context){}
	private function OnDeserialization($sender){}
	/**
	 * @uses StrongNameKeyPairOverride::__construct_1 <br>public , args: ($keyPairFile)<br>
	 * @uses StrongNameKeyPairOverride::__construct_2 <br>public , args: ($keyPairArray)<br>
	 * @uses StrongNameKeyPairOverride::__construct_3 <br>public , args: ($keyPairContainer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}