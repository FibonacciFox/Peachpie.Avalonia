<?php
namespace System\Reflection;
interface IReflectableType
{


	/**
	 * @return \System\Reflection\TypeInfo
	 */
	public function GetTypeInfo();
}