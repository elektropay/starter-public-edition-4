<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

/**
 * AccountAttributes
 */
class AccountAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $accountId = null;
    /** @var string|null */
    protected $name = null;
    /** @var int|null */
    protected $firstNameLength = null;
    /** @var string|null */
    protected $externalKey = null;
    /** @var string|null */
    protected $email = null;
    /** @var int|null */
    protected $billCycleDayLocal = null;
    /** @var string|null */
    protected $currency = null;
    /** @var string|null */
    protected $parentAccountId = null;
    /** @var bool|null */
    protected $isPaymentDelegatedToParent = null;
    /** @var string|null */
    protected $paymentMethodId = null;
    /** @var string|null */
    protected $timeZone = null;
    /** @var string|null */
    protected $address1 = null;
    /** @var string|null */
    protected $address2 = null;
    /** @var string|null */
    protected $postalCode = null;
    /** @var string|null */
    protected $company = null;
    /** @var string|null */
    protected $city = null;
    /** @var string|null */
    protected $state = null;
    /** @var string|null */
    protected $country = null;
    /** @var string|null */
    protected $locale = null;
    /** @var string|null */
    protected $phone = null;
    /** @var string|null */
    protected $notes = null;
    /** @var bool|null */
    protected $isMigrated = null;
    /** @var bool|null */
    protected $isNotifiedForInvoices = null;
    /** @var float|null */
    protected $accountBalance = null;
    /** @var float|null */
    protected $accountCBA = null;
    /** @var AuditLogAttributes[]|null */
    protected $auditLogs = null;

    /**
     * @param string|null $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int|null $firstNameLength
     */
    public function setFirstNameLength($firstNameLength)
    {
        $this->firstNameLength = $firstNameLength;
    }

    /**
     * @return int|null
     */
    public function getFirstNameLength()
    {
        return $this->firstNameLength;
    }

    /**
     * @param string|null $externalKey
     */
    public function setExternalKey($externalKey)
    {
        $this->externalKey = $externalKey;
    }

    /**
     * @return string|null
     */
    public function getExternalKey()
    {
        return $this->externalKey;
    }

    /**
     * @param string|null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param int|null $billCycleDayLocal
     */
    public function setBillCycleDayLocal($billCycleDayLocal)
    {
        $this->billCycleDayLocal = $billCycleDayLocal;
    }

    /**
     * @return int|null
     */
    public function getBillCycleDayLocal()
    {
        return $this->billCycleDayLocal;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string|null $parentAccountId
     */
    public function setParentAccountId($parentAccountId)
    {
        $this->parentAccountId = $parentAccountId;
    }

    /**
     * @return string|null
     */
    public function getParentAccountId()
    {
        return $this->parentAccountId;
    }

    /**
     * @param bool|null $isPaymentDelegatedToParent
     */
    public function setIsPaymentDelegatedToParent($isPaymentDelegatedToParent)
    {
        $this->isPaymentDelegatedToParent = $isPaymentDelegatedToParent;
    }

    /**
     * @return bool|null
     */
    public function getIsPaymentDelegatedToParent()
    {
        return $this->isPaymentDelegatedToParent;
    }

    /**
     * @param string|null $paymentMethodId
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string|null $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string|null $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string|null $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string|null $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string|null $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string|null $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string|null $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string|null $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string|null $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param bool|null $isMigrated
     */
    public function setIsMigrated($isMigrated)
    {
        $this->isMigrated = $isMigrated;
    }

    /**
     * @return bool|null
     */
    public function getIsMigrated()
    {
        return $this->isMigrated;
    }

    /**
     * @param bool|null $isNotifiedForInvoices
     */
    public function setIsNotifiedForInvoices($isNotifiedForInvoices)
    {
        $this->isNotifiedForInvoices = $isNotifiedForInvoices;
    }

    /**
     * @return bool|null
     */
    public function getIsNotifiedForInvoices()
    {
        return $this->isNotifiedForInvoices;
    }

    /**
     * @param float|null $accountBalance
     */
    public function setAccountBalance($accountBalance)
    {
        $this->accountBalance = $accountBalance;
    }

    /**
     * @return float|null
     */
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }

    /**
     * @param float|null $accountCBA
     */
    public function setAccountCBA($accountCBA)
    {
        $this->accountCBA = $accountCBA;
    }

    /**
     * @return float|null
     */
    public function getAccountCBA()
    {
        return $this->accountCBA;
    }

    /**
     * @param AuditLogAttributes[]|null $auditLogs
     */
    public function setAuditLogs($auditLogs)
    {
        $this->auditLogs = $auditLogs;
    }

    /**
     * @return AuditLogAttributes[]|null
     */
    public function getAuditLogs()
    {
        return $this->auditLogs;
    }

    /**
     * @return string
     */
    public function getAuditLogsType()
    {
        return AuditLogAttributes::class;
    }

}
