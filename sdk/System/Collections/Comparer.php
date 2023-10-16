<?php
namespace System\Collections;
/**
 */
class Comparer extends \System\Object implements 
	\System\Collections\IComparer,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Collections\Comparer
	 * @field
	 */
	public readonly $Default;
	/**
	 * @var \System\Collections\Comparer
	 * @field
	 */
	public readonly $DefaultInvariant;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $a
	 * @param \System\Object|object $b
	 * @return \System\Int32|int
	 */
	public  function Compare($a, $b){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
