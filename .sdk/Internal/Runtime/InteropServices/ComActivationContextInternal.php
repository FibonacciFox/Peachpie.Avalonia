<?php
namespace Internal\Runtime\InteropServices;
final class ComActivationContextInternal extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Guid
	 */
	public $ClassId;
	/**
	 * @field
	 * @var \System\Guid
	 */
	public $InterfaceId;
	/**
	 * @field
	 * @var \System\Char*
	 */
	public $AssemblyPathBuffer;
	/**
	 * @field
	 * @var \System\Char*
	 */
	public $AssemblyNameBuffer;
	/**
	 * @field
	 * @var \System\Char*
	 */
	public $TypeNameBuffer;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $ClassFactoryDest;

}