<?php
namespace System\Reflection\Emit;
final class VarArgMethod extends \System\Object
{
	/**
	 * @field
	 * @var \System\Reflection\RuntimeMethodInfo
	 */
	protected $m_method;
	/**
	 * @field
	 * @var \System\Reflection\Emit\DynamicMethod
	 */
	protected $m_dynamicMethod;
	/**
	 * @field
	 * @var \System\Reflection\Emit\SignatureHelper
	 */
	protected $m_signature;

}