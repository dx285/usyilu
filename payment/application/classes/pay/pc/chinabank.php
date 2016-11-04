<?php defined('SYSPATH') or die('No direct script access.');

/**
 * PC ����������֧��
 * Class Pay_Pc_ChinaBank
 */
class Pay_Pc_ChinaBank
{
    //����֧���ӿ��ļ�Ŀ¼
    private $_cbPayDir;
    //�첽֪ͨ
    const NOTIFY_URL = '/callback/index/Pay_Pc_ChinaBank-notify_url/';
    //ͬ��֪ͨ
    const ERTURN_URL = '/callback/index/Pay_Pc_ChinaBank-return_url/';

    /**
     * ����֧����ʼ��
     */
    public function __construct()
    {
        $this->_cbPayDir = Common::C('interface_path') . 'pc/chinabank/';
        // ǩ��֤��·��
        define('SDK_SIGN_CERT_PATH', $this->_cbPayDir . 'certs/zhengshu.pfx');
        // ǩ��֤������
        define('SDK_SIGN_CERT_PWD', Common::C('cfg_yinlian_new_securitykey'));
        // �������֤��
        define('SDK_ENCRYPT_CERT_PATH', $this->_cbPayDir . 'certs/acp_prod_enc.cer');
        // ��ǩ֤��·��
        define('SDK_VERIFY_CERT_DIR', $this->_cbPayDir . 'certs/');
        //�ļ�����Ŀ¼
        define('SDK_FILE_DOWN_PATH', $this->_cbPayDir . 'file/');
        //��־ Ŀ¼
        define('SDK_LOG_FILE_PATH', $this->_cbPayDir . 'logs/');
        //ǰ̨֪ͨ��ַ
        define('SDK_FRONT_NOTIFY_URL', Common::C('base_url') . self::ERTURN_URL);
        //��̨֪ͨ��ַ
        define('SDK_BACK_NOTIFY_URL', Common::C('base_url') . self::NOTIFY_URL);

    }

    /**
     * �ύ֧������
     */
    public function submit($data)
    {
        // ��ʼ����־
        require $this->_cbPayDir . '/sdk/acp_service.php';
        //��ʽ������
        $params = array(
            'version' => '5.0.0',
            'encoding' => 'utf-8',
            'certId' => getSignCertId(SDK_SIGN_CERT_PATH, SDK_SIGN_CERT_PWD),
            'txnType' => '01',
            'txnSubType' => '01',
            'bizType' => '000201',
            'frontUrl' => SDK_FRONT_NOTIFY_URL,
            'backUrl' => SDK_BACK_NOTIFY_URL,
            'signMethod' => '01',
            'channelType' => '08',
            'accessType' => '0',
            'currencyCode' => '156',
            'merId' => Common::C('cfg_yinlian_new_name'),
            'orderId' => $data['ordersn'],
            'txnTime' => date('YmdHis'),
            'txnAmt' => $data['total'] * 100,
        );
        AcpService::sign($params);
        $uri = SDK_FRONT_TRANS_URL;
        $html_form = AcpService::createAutoFormHtml($params, $uri);
        echo $html_form;
    }

    /**
     * �������첽֪ͨҳ��·��
     */
    public function notify_url()
    {
        $bool = 'failure';
        include $this->_cbPayDir . '/sdk/acp_service.php';
        if (AcpService::validate($_POST))
        {
            if ($_POST ['respCode'] == '00' || $_POST ['respCode'] == 'A6')
            {
                $tip = '��Ϣ:��������֧��(��)����,���������ʵ��֧����һ��';
                if (Common::total_fee_confirm($_POST['orderId'], $_POST['txnAmt'] / 100, $tip))
                {
                    $method = Common::C('pc');
                    Common::pay_success($_POST['orderId'], $method['method']['4']['name']);
                }
                $bool = 'success';
            }
            else
            {
                new Pay_Exception("״̬:{$_POST ['respMsg']}");
            }
        }
        else
        {
            new Pay_Exception("״̬:��������֧��(��)������Ч����֤ʧ��");
        }
        return $bool;
    }

    /**
     * ҳ����תͬ��֪ͨҳ��·��
     */
    public function return_url()
    {
        include $this->_cbPayDir . '/sdk/acp_service.php';
        if (AcpService::validate($_POST))
        {
            if ($_POST ['respCode'] == '00' || $_POST ['respCode'] == 'A6')
            {
                $tip = '��Ϣ:��������֧��(ͬ)����,���������ʵ��֧����һ��';
                $info['sign'] = Common::total_fee_confirm($_POST['orderId'], $_POST['txnAmt'] / 100, $tip) ? '11' : '23';
            }
            else
            {
                new Pay_Exception("״̬:{$_POST ['respMsg']}");
            }
        }
        else
        {
            $info['sign'] = '22';
            new Pay_Exception("״̬:��������֧��(ͬ)������Ч����֤ʧ��");

        }
        $info['ordersn'] = $_POST['orderId'];
        Common::pay_status($info);
    }
}