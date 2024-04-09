<?php
namespace System\Reflection;
final class Missing extends \System\Object implements
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Missing
	 */
	public static $Value;
	private function GetObjectData($info, $context){}
}