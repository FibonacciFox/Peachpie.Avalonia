<?php
namespace System\Security\Permissions;
/**
 */
class SecurityPermissionAttribute extends \System\Security\Permissions\CodeAccessSecurityAttribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Assertion;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $BindingRedirects;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ControlAppDomain;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ControlDomainPolicy;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ControlEvidence;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ControlPolicy;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ControlPrincipal;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ControlThread;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Execution;
	/**
	 * @var \System\Security\Permissions\SecurityPermissionFlag
	 * @property
	 */
	public $Flags;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Infrastructure;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $RemotingConfiguration;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $SerializationFormatter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $SkipVerification;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $UnmanagedCode;
	/**
	 * @var \System\Security\Permissions\SecurityAction
	 * @property
	 */
	public $Action;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Unrestricted;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_Assertion(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Assertion($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_BindingRedirects(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_BindingRedirects($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ControlAppDomain(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ControlAppDomain($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ControlDomainPolicy(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ControlDomainPolicy($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ControlEvidence(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ControlEvidence($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ControlPolicy(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ControlPolicy($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ControlPrincipal(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ControlPrincipal($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ControlThread(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ControlThread($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Execution(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Execution($value){}
	/**
	 * @return \System\Security\Permissions\SecurityPermissionFlag
	 */
	public  function get_Flags(){}
	/**
	 * @param \System\Security\Permissions\SecurityPermissionFlag $value
	 * @return \System\Void|void
	 */
	public  function set_Flags($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Infrastructure(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Infrastructure($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_RemotingConfiguration(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_RemotingConfiguration($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SerializationFormatter(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_SerializationFormatter($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SkipVerification(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_SkipVerification($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UnmanagedCode(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_UnmanagedCode($value){}
}
