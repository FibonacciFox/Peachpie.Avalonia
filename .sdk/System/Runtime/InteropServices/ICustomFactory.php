<?php
namespace System\Runtime\InteropServices;
interface ICustomFactory
{

	/**
	 * @param \System\Type $serverType
	 * @return \System\MarshalByRefObject
	 */
	public function CreateInstance($serverType);
}