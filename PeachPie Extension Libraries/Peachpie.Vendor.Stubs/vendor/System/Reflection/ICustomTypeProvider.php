<?php
namespace System\Reflection;
interface ICustomTypeProvider
{

	/**
	 * @return \System\Type
	 */
	public function GetCustomType();
}