<?php
namespace System\Security;
/**
 */
class SecurityRulesAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $SkipVerificationInFullTrust;
	/**
	 * @var \System\Security\SecurityRuleSet
	 * @property
	 */
	public readonly $RuleSet;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_SkipVerificationInFullTrust(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_SkipVerificationInFullTrust($value){}
	/**
	 * @return \System\Security\SecurityRuleSet
	 */
	public  function get_RuleSet(){}
}
