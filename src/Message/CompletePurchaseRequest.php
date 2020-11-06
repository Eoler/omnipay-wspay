<?php

namespace Omnipay\WsPay\Message;

class CompletePurchaseRequest extends PurchaseRequest
{
    public function getData()
    {
        return $this->httpRequest->query->getIterator()->getArrayCopy();
    }

    public function sendData($data)
    {
        return $this->response = new CompletePurchaseResponse($this, $data);
    }
}

