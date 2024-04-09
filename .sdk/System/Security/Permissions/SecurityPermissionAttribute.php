<?php
namespace System\Security\Permissions;
final class SecurityPermissionAttribute extends \System\Security\Permissions\CodeAccessSecurityAttribute
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Assertion;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $BindingRedirects;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ControlAppDomain;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ControlDomainPolicy;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ControlEvidence;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ControlPolicy;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ControlPrincipal;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ControlThread;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Execution;
	/**
	 * @property
	 * @var \System\Security\Permissions\SecurityPermissionFlag
	 */
	public $Flags;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Infrastructure;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $RemotingConfiguration;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $SerializationFormatter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $SkipVerification;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $UnmanagedCode;
	/**
	 * @property
	 * @var \System\Security\Permissions\SecurityAction
	 */
	public $Action;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Unrestricted;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Security\Permissions\SecurityAction $action
	 */
	public function __construct($action){}
}