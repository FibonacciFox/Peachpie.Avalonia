<?php
namespace System\Reflection;
interface ICustomAttributeProvider
{


	/**
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object[]|array
	 */
	public function GetCustomAttributes($inherit);
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object[]|array
	 */
	public function GetCustomAttributes($attributeType, $inherit);
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Boolean|bool
	 */
	public function IsDefined($attributeType, $inherit);
}