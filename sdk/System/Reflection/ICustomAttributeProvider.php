<?php
namespace System\Reflection;
/**
 */
interface ICustomAttributeProvider
{
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean $inherit
	 */
	public function IsDefined($attributeType, $inherit);
}
