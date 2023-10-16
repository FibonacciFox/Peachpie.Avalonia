<?php
namespace System\Reflection\Emit;
/**
 */
enum OpCodeValues implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Nop = 0;
	case Break = 1;
	case Ldarg_0 = 2;
	case Ldarg_1 = 3;
	case Ldarg_2 = 4;
	case Ldarg_3 = 5;
	case Ldloc_0 = 6;
	case Ldloc_1 = 7;
	case Ldloc_2 = 8;
	case Ldloc_3 = 9;
	case Stloc_0 = 10;
	case Stloc_1 = 11;
	case Stloc_2 = 12;
	case Stloc_3 = 13;
	case Ldarg_S = 14;
	case Ldarga_S = 15;
	case Starg_S = 16;
	case Ldloc_S = 17;
	case Ldloca_S = 18;
	case Stloc_S = 19;
	case Ldnull = 20;
	case Ldc_I4_M1 = 21;
	case Ldc_I4_0 = 22;
	case Ldc_I4_1 = 23;
	case Ldc_I4_2 = 24;
	case Ldc_I4_3 = 25;
	case Ldc_I4_4 = 26;
	case Ldc_I4_5 = 27;
	case Ldc_I4_6 = 28;
	case Ldc_I4_7 = 29;
	case Ldc_I4_8 = 30;
	case Ldc_I4_S = 31;
	case Ldc_I4 = 32;
	case Ldc_I8 = 33;
	case Ldc_R4 = 34;
	case Ldc_R8 = 35;
	case Dup = 37;
	case Pop = 38;
	case Jmp = 39;
	case Call = 40;
	case Calli = 41;
	case Ret = 42;
	case Br_S = 43;
	case Brfalse_S = 44;
	case Brtrue_S = 45;
	case Beq_S = 46;
	case Bge_S = 47;
	case Bgt_S = 48;
	case Ble_S = 49;
	case Blt_S = 50;
	case Bne_Un_S = 51;
	case Bge_Un_S = 52;
	case Bgt_Un_S = 53;
	case Ble_Un_S = 54;
	case Blt_Un_S = 55;
	case Br = 56;
	case Brfalse = 57;
	case Brtrue = 58;
	case Beq = 59;
	case Bge = 60;
	case Bgt = 61;
	case Ble = 62;
	case Blt = 63;
	case Bne_Un = 64;
	case Bge_Un = 65;
	case Bgt_Un = 66;
	case Ble_Un = 67;
	case Blt_Un = 68;
	case Switch = 69;
	case Ldind_I1 = 70;
	case Ldind_U1 = 71;
	case Ldind_I2 = 72;
	case Ldind_U2 = 73;
	case Ldind_I4 = 74;
	case Ldind_U4 = 75;
	case Ldind_I8 = 76;
	case Ldind_I = 77;
	case Ldind_R4 = 78;
	case Ldind_R8 = 79;
	case Ldind_Ref = 80;
	case Stind_Ref = 81;
	case Stind_I1 = 82;
	case Stind_I2 = 83;
	case Stind_I4 = 84;
	case Stind_I8 = 85;
	case Stind_R4 = 86;
	case Stind_R8 = 87;
	case Add = 88;
	case Sub = 89;
	case Mul = 90;
	case Div = 91;
	case Div_Un = 92;
	case Rem = 93;
	case Rem_Un = 94;
	case And = 95;
	case Or = 96;
	case Xor = 97;
	case Shl = 98;
	case Shr = 99;
	case Shr_Un = 100;
	case Neg = 101;
	case Not = 102;
	case Conv_I1 = 103;
	case Conv_I2 = 104;
	case Conv_I4 = 105;
	case Conv_I8 = 106;
	case Conv_R4 = 107;
	case Conv_R8 = 108;
	case Conv_U4 = 109;
	case Conv_U8 = 110;
	case Callvirt = 111;
	case Cpobj = 112;
	case Ldobj = 113;
	case Ldstr = 114;
	case Newobj = 115;
	case Castclass = 116;
	case Isinst = 117;
	case Conv_R_Un = 118;
	case Unbox = 121;
	case Throw = 122;
	case Ldfld = 123;
	case Ldflda = 124;
	case Stfld = 125;
	case Ldsfld = 126;
	case Ldsflda = 127;
	case Stsfld = 128;
	case Stobj = 129;
	case Conv_Ovf_I1_Un = 130;
	case Conv_Ovf_I2_Un = 131;
	case Conv_Ovf_I4_Un = 132;
	case Conv_Ovf_I8_Un = 133;
	case Conv_Ovf_U1_Un = 134;
	case Conv_Ovf_U2_Un = 135;
	case Conv_Ovf_U4_Un = 136;
	case Conv_Ovf_U8_Un = 137;
	case Conv_Ovf_I_Un = 138;
	case Conv_Ovf_U_Un = 139;
	case Box = 140;
	case Newarr = 141;
	case Ldlen = 142;
	case Ldelema = 143;
	case Ldelem_I1 = 144;
	case Ldelem_U1 = 145;
	case Ldelem_I2 = 146;
	case Ldelem_U2 = 147;
	case Ldelem_I4 = 148;
	case Ldelem_U4 = 149;
	case Ldelem_I8 = 150;
	case Ldelem_I = 151;
	case Ldelem_R4 = 152;
	case Ldelem_R8 = 153;
	case Ldelem_Ref = 154;
	case Stelem_I = 155;
	case Stelem_I1 = 156;
	case Stelem_I2 = 157;
	case Stelem_I4 = 158;
	case Stelem_I8 = 159;
	case Stelem_R4 = 160;
	case Stelem_R8 = 161;
	case Stelem_Ref = 162;
	case Ldelem = 163;
	case Stelem = 164;
	case Unbox_Any = 165;
	case Conv_Ovf_I1 = 179;
	case Conv_Ovf_U1 = 180;
	case Conv_Ovf_I2 = 181;
	case Conv_Ovf_U2 = 182;
	case Conv_Ovf_I4 = 183;
	case Conv_Ovf_U4 = 184;
	case Conv_Ovf_I8 = 185;
	case Conv_Ovf_U8 = 186;
	case Refanyval = 194;
	case Ckfinite = 195;
	case Mkrefany = 198;
	case Ldtoken = 208;
	case Conv_U2 = 209;
	case Conv_U1 = 210;
	case Conv_I = 211;
	case Conv_Ovf_I = 212;
	case Conv_Ovf_U = 213;
	case Add_Ovf = 214;
	case Add_Ovf_Un = 215;
	case Mul_Ovf = 216;
	case Mul_Ovf_Un = 217;
	case Sub_Ovf = 218;
	case Sub_Ovf_Un = 219;
	case Endfinally = 220;
	case Leave = 221;
	case Leave_S = 222;
	case Stind_I = 223;
	case Conv_U = 224;
	case Prefix7 = 248;
	case Prefix6 = 249;
	case Prefix5 = 250;
	case Prefix4 = 251;
	case Prefix3 = 252;
	case Prefix2 = 253;
	case Prefix1 = 254;
	case Prefixref = 255;
	case Arglist = 65024;
	case Ceq = 65025;
	case Cgt = 65026;
	case Cgt_Un = 65027;
	case Clt = 65028;
	case Clt_Un = 65029;
	case Ldftn = 65030;
	case Ldvirtftn = 65031;
	case Ldarg = 65033;
	case Ldarga = 65034;
	case Starg = 65035;
	case Ldloc = 65036;
	case Ldloca = 65037;
	case Stloc = 65038;
	case Localloc = 65039;
	case Endfilter = 65041;
	case Unaligned_ = 65042;
	case Volatile_ = 65043;
	case Tail_ = 65044;
	case Initobj = 65045;
	case Constrained_ = 65046;
	case Cpblk = 65047;
	case Initblk = 65048;
	case Rethrow = 65050;
	case Sizeof = 65052;
	case Refanytype = 65053;
	case Readonly_ = 65054;
}
