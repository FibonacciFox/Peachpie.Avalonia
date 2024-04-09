<?php
namespace System\Runtime\Serialization;
interface IObjectReference
{

	/**
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Object|object
	 */
	public function GetRealObject($context);
}