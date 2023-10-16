<?php
namespace System\Runtime\InteropServices;
/**
 */
interface ICustomFactory
{
	/**
	 * @param \System\Type $serverType
	 */
	public function CreateInstance($serverType);
}
