<?php
namespace System\Security\Permissions;
enum SecurityPermissionFlag
{

	
	case AllFlags = '16383';
	case Assertion = '1';
	case BindingRedirects = '8192';
	case ControlAppDomain = '1024';
	case ControlDomainPolicy = '256';
	case ControlEvidence = '32';
	case ControlPolicy = '64';
	case ControlPrincipal = '512';
	case ControlThread = '16';
	case Execution = '8';
	case Infrastructure = '4096';
	case NoFlags = '0';
	case RemotingConfiguration = '2048';
	case SerializationFormatter = '128';
	case SkipVerification = '4';
	case UnmanagedCode = '2';

}