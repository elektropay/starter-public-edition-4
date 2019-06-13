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
 * PaymentAttemptAttributes
 */
class PaymentAttemptAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $accountId = null;
    /** @var string|null */
    protected $paymentMethodId = null;
    /** @var string|null */
    protected $paymentExternalKey = null;
    /** @var string|null */
    protected $transactionId = null;
    /** @var string|null */
    protected $transactionExternalKey = null;
    /** @var string|null */
    protected $transactionType = null;
    /** @var string|null */
    protected $effectiveDate = null;
    /** @var string|null */
    protected $stateName = null;
    /** @var float|null */
    protected $amount = null;
    /** @var string|null */
    protected $currency = null;
    /** @var string|null */
    protected $pluginName = null;
    /** @var PluginPropertyAttributes[]|null */
    protected $pluginProperties = null;
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
     * @param string|null $paymentExternalKey
     */
    public function setPaymentExternalKey($paymentExternalKey)
    {
        $this->paymentExternalKey = $paymentExternalKey;
    }

    /**
     * @return string|null
     */
    public function getPaymentExternalKey()
    {
        return $this->paymentExternalKey;
    }

    /**
     * @param string|null $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string|null $transactionExternalKey
     */
    public function setTransactionExternalKey($transactionExternalKey)
    {
        $this->transactionExternalKey = $transactionExternalKey;
    }

    /**
     * @return string|null
     */
    public function getTransactionExternalKey()
    {
        return $this->transactionExternalKey;
    }

    /**
     * @param string|null $transactionType
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
    }

    /**
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * @param string|null $effectiveDate
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
    }

    /**
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @param string|null $stateName
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
    }

    /**
     * @return string|null
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
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
     * @param string|null $pluginName
     */
    public function setPluginName($pluginName)
    {
        $this->pluginName = $pluginName;
    }

    /**
     * @return string|null
     */
    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * @param PluginPropertyAttributes[]|null $pluginProperties
     */
    public function setPluginProperties($pluginProperties)
    {
        $this->pluginProperties = $pluginProperties;
    }

    /**
     * @return PluginPropertyAttributes[]|null
     */
    public function getPluginProperties()
    {
        return $this->pluginProperties;
    }

    /**
     * @return string
     */
    public function getPluginPropertiesType()
    {
        return PluginPropertyAttributes::class;
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