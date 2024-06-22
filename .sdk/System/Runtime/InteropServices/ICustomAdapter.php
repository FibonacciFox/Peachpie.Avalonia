<?php
namespace System\Runtime\InteropServices;
interface ICustomAdapter
{


	/**
	 * @return \System\Object|object
	 */
	public function GetUnderlyingObject();
}