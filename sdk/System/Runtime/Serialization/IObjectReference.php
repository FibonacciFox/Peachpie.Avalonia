<?php
namespace System\Runtime\Serialization;
/**
 */
interface IObjectReference
{
	/**
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 */
	public function GetRealObject($context);
}
