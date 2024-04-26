<?php
class Transactions
{
    var $transactionId;
    var $customerId;
    var $GrandTotal;
    var $TransactionDate;
    var $CustomerDate;
    var $OrderLocation;
    var $Recipient;
    var $EstimateDateTime;
    var $RefundDate;
    var $Status;
    var $Payment;
    var $AmountPaid;
    var $IsPaid;
    var $RefundDetails;

    function __construct()
    {
        $this->transactionId = 00000;
        $this->customerId = 00000;
        $this->GrandTotal = 00000;
        $this->TransactionDate = "";
        $this->CustomerDate = "";
        $this->OrderLocation = "";
        $this->Recipient = "";
        $this->EstimateDateTime = "";
        $this->RefundDate = "";
        $this->Status = "";
        $this->Payment = "";
        $this->AmountPaid = 00000;
        $this->IsPaid = 00000;
        $this->RefundDetails = "";
    }

    //setter or mutator
    function settransactionId($transactionId)
    {

        $this->transactionId = $transactionId;
    }
    //getter or accessor
    function gettransactionId()
    {
       return $this->id; 
    }

    function setcustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
    function getcustomerId()
    {
        return $this->customerId;
    }

    function setGrandTotal($GrandTotal)
    {

        $this->GrandTotal = $GrandTotal;
    }
    //getter or accessor
    function getGrandTotal()
    {
       return $this->lname; 
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }


}

?>