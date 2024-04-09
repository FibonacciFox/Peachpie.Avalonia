<?php
namespace System;
final class OrdinalCaseSensitiveComparer extends \System\OrdinalComparer implements
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\OrdinalCaseSensitiveComparer
	 */
	protected static $Instance;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
}