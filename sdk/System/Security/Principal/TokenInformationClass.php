<?php
namespace System\Security\Principal;
/**
 */
enum TokenInformationClass implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TokenUser = 1;
	case TokenGroups = 2;
	case TokenPrivileges = 3;
	case TokenOwner = 4;
	case TokenPrimaryGroup = 5;
	case TokenDefaultDacl = 6;
	case TokenSource = 7;
	case TokenType = 8;
	case TokenImpersonationLevel = 9;
	case TokenStatistics = 10;
	case TokenRestrictedSids = 11;
	case TokenSessionId = 12;
	case TokenGroupsAndPrivileges = 13;
	case TokenSessionReference = 14;
	case TokenSandBoxInert = 15;
	case TokenAuditPolicy = 16;
	case TokenOrigin = 17;
	case TokenElevationType = 18;
	case TokenLinkedToken = 19;
	case TokenElevation = 20;
	case TokenHasRestrictions = 21;
	case TokenAccessInformation = 22;
	case TokenVirtualizationAllowed = 23;
	case TokenVirtualizationEnabled = 24;
	case TokenIntegrityLevel = 25;
	case TokenUIAccess = 26;
	case TokenMandatoryPolicy = 27;
	case TokenLogonSid = 28;
	case TokenIsAppContainer = 29;
	case TokenCapabilities = 30;
	case TokenAppContainerSid = 31;
	case TokenAppContainerNumber = 32;
	case TokenUserClaimAttributes = 33;
	case TokenDeviceClaimAttributes = 34;
	case TokenRestrictedUserClaimAttributes = 35;
	case TokenRestrictedDeviceClaimAttributes = 36;
	case TokenDeviceGroups = 37;
	case TokenRestrictedDeviceGroups = 38;
	case MaxTokenInfoClass = 39;
}
