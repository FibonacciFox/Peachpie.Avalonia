<?php
namespace System\Runtime\InteropServices;
/**
 */
class ComEventInterfaceAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $SourceInterface;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $EventProvider;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_SourceInterface(){}
	/**
	 * @return \System\Type
	 */
	public  function get_EventProvider(){}
}
