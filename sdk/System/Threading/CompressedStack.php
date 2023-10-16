<?php
namespace System\Threading;
/**
 */
class CompressedStack extends \System\Object implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @return \System\Threading\CompressedStack
	 */
	public static function Capture(){}
	/**
	 * @return \System\Threading\CompressedStack
	 */
	public  function CreateCopy(){}
	/**
	 * @return \System\Threading\CompressedStack
	 */
	public static function GetCompressedStack(){}
	/**
	 * @param \System\Threading\CompressedStack $compressedStack
	 * @param \System\Threading\ContextCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public static function Run($compressedStack, $callback, $state){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
