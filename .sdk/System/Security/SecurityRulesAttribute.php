<?php
namespace System\Security;
final class SecurityRulesAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $SkipVerificationInFullTrust;
	/**
	 * @property
	 * @var \System\Security\SecurityRuleSet
	 * @since readonly
	 */
	public $RuleSet;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Security\SecurityRuleSet $ruleSet
	 */
	public function __construct($ruleSet){}
}