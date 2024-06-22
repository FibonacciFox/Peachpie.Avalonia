<?php
namespace System\Reflection;
final class AssemblySignatureKeyAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $PublicKey;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Countersignature;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $publicKey
	 * @param \System\String|string $countersignature
	 */
	public function __construct($publicKey, $countersignature){}
}