<?php
namespace System;
final class CultureAwareComparer extends \System\StringComparer implements
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Runtime\Serialization\ISerializable
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\CultureAwareComparer
	 */
	protected static $InvariantCaseSensitiveInstance;
	/**
	 * @field
	 * @since readonly
	 * @var \System\CultureAwareComparer
	 */
	protected static $InvariantIgnoreCaseInstance;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
}