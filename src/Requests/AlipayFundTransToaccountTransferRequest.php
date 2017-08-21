<?php

namespace Omnipay\Alipay\Requests;

use Omnipay\Alipay\Responses\AlipayFundTransToaccountTransferResponse;
use Omnipay\Common\Message\ResponseInterface;

/**
 * Class AlipayFundTransToaccountTransferRequest
 * @package Omnipay\Alipay\Requests
 * @link    https://docs.open.alipay.com/api_28/alipay.fund.trans.toaccount.transfer
 */
class AlipayFundTransToaccountTransferRequest extends AbstractAopRequest
{

    protected $method = 'alipay.fund.trans.toaccount.transfer';

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return ResponseInterface
     * @throws InvalidRequestException
     */
    public function sendData($data)
    {
        $data = parent::sendData($data);

        return $this->response = new AlipayFundTransToaccountTransferResponse($this, $data);
    }


    public function validateParams()
    {
        parent::validateParams();

        $this->validateBizContentOne(
            'out_biz_no',
            'payee_account'
        );
    }
}
