<?php
namespace System\IO\Pipes;
/**
 */
class PipeAuditRule extends \System\Security\AccessControl\AuditRule
{
	/**
	 * @var \System\IO\Pipes\PipeAccessRights
	 * @property
	 */
	public readonly $PipeAccessRights;
	/**
	 * @var \System\Security\AccessControl\AuditFlags
	 * @property
	 */
	public readonly $AuditFlags;
	/**
	 * @var \System\Security\Principal\IdentityReference
	 * @property
	 */
	public readonly $IdentityReference;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInherited;
	/**
	 * @var \System\Security\AccessControl\InheritanceFlags
	 * @property
	 */
	public readonly $InheritanceFlags;
	/**
	 * @var \System\Security\AccessControl\PropagationFlags
	 * @property
	 */
	public readonly $PropagationFlags;
	/**
	 * @param \System\IO\Pipes\PipeAccessRights $rights
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AccessMaskFromRights($rights){}
	/**
	 * @return \System\IO\Pipes\PipeAccessRights
	 */
	public  function get_PipeAccessRights(){}
}
