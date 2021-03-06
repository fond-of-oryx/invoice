<?php

namespace FondOfOryx\Zed\Invoice\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\AddressTransfer;
use Orm\Zed\Invoice\Persistence\FooInvoiceAddress;

interface InvoiceAddressMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\AddressTransfer $addressTransfer
     * @param \Orm\Zed\Invoice\Persistence\FooInvoiceAddress $fooInvoiceAddress
     *
     * @return \Orm\Zed\Invoice\Persistence\FooInvoiceAddress
     */
    public function mapTransferToEntity(
        AddressTransfer $addressTransfer,
        FooInvoiceAddress $fooInvoiceAddress
    ): FooInvoiceAddress;
}
