<?php

// ######(��������Ϊ�����������ã�������̻�ϵͳ��������޸�)#######

// cvn2���� 1������ 0:������
const SDK_CVN2_ENC = 0;
// ��Ч�ڼ��� 1:���� 0:������
const SDK_DATE_ENC = 0;
// ���ż��� 1������ 0:������
const SDK_PAN_ENC = 0;
 
  
// �̻���  �ֻ�ʵ�忨
const SDK_MEMBER_MOBILE_REAL_ID = '105290007800034';
// �̻���  �ֻ����⿨
const SDK_MEMBER_MOBILE_VIRTUAL_ID = '105290007800035';

// �̻���  ����ʵ�忨
const SDK_MEMBER_PC_REAL_ID = '105290007800029';


// �̻���  �������⿨
const SDK_MEMBER_PC_VIRTUAL_ID = '105290007800030';


// ǩ��֤��·�� ����ϵ��Ӫ��ȡ���룬��CFCA��վ���غ����ã���������֤�����벢���ã�
const SDK_SIGN_MOBILE_REAL_PATH = 'D:/certs/wap34.pfx';

const SDK_SIGN_MOBILE_VIRTUAL_PATH = 'D:/certs/wap35.pfx';

const SDK_SIGN_PC_REAL_PATH = 'D:/certs/pc29.pfx';

const SDK_SIGN_PC_VIRTUAL_PATH = 'D:/certs/pc30.pfx';

// ǩ��֤������
 const SDK_SIGN_CERT_PWD = '345678';
 
// ��ǩ֤��
const SDK_VERIFY_CERT_PATH = 'D:/certs/UpopRsaCert.cer';

// �������֤��
const SDK_ENCRYPT_CERT_PATH = 'D:/certs/encryptpub.cer';

// ��ǩ֤��·��
const SDK_VERIFY_CERT_DIR = 'D:/certs/';

// ǰ̨�����ַ
const SDK_FRONT_TRANS_URL = 'https://gateway.95516.com/gateway/api/frontTransReq.do';

// ��̨�����ַ
const SDK_BACK_TRANS_URL = 'https://gateway.95516.com/gateway/api/backTransReq.do';

// ��������
const SDK_BATCH_TRANS_URL = 'https://gateway.95516.com/gateway/api/batchTrans.do';

//���ʲ�ѯ�����ַ
const SDK_SINGLE_QUERY_URL = 'https://gateway.95516.com/gateway/api/queryTrans.do';

//�ļ����������ַ
const SDK_FILE_QUERY_URL = 'https://filedownload.95516.com/';

//�п����׵�ַ
const SDK_Card_Request_Url = 'https://gateway.95516.com/gateway/api/cardTransReq.do';

//App���׵�ַ
const SDK_App_Request_Url = 'https://gateway.95516.com/gateway/api/appTransReq.do';


// ǰ̨֪ͨ��ַ (�̻���������֪ͨ��ַ)
const SDK_FRONT_NOTIFY_URL = 'http://shop.dream-gardens.com.cn/includes/modules/payment/upop.php';
// ��̨֪ͨ��ַ (�̻���������֪ͨ��ַ)
const SDK_BACK_NOTIFY_URL = 'http://shop.dream-gardens.com.cn/includes/modules/payment/upop.php';

// MOBILEǰ̨֪ͨ��ַ (�̻���������֪ͨ��ַ)
const SDK_MOBILE_FRONT_NOTIFY_URL = 'http://shop.dream-gardens.com.cn/mobile/respond.php';
// MOBILE��̨֪ͨ��ַ (�̻���������֪ͨ��ַ)
const SDK_MOBILE_BACK_NOTIFY_URL = 'http://shop.dream-gardens.com.cn/mobile/respond.php';



//�ļ�����Ŀ¼ 
const SDK_FILE_DOWN_PATH = 'd:/upacpfile/';

//��־ Ŀ¼ 
const SDK_LOG_FILE_PATH = 'D:/upacplogs/';

//��־����
const SDK_LOG_LEVEL = 'INFO';


	
?>