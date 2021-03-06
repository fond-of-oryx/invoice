<?php

namespace FondOfOryx\Zed\Invoice\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\InvoiceTransfer;
use Orm\Zed\Invoice\Persistence\FooInvoice;

interface InvoiceMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\InvoiceTransfer $invoiceTransfer
     * @param \Orm\Zed\Invoice\Persistence\FooInvoice $fooInvoice
     *
     * @return \Orm\Zed\Invoice\Persistence\FooInvoice
     */
    public function mapTransferToEntity(
        InvoiceTransfer $invoiceTransfer,
        FooInvoice $fooInvoice
    ): FooInvoice;

    /**
     * @param \Orm\Zed\Invoice\Persistence\FooInvoice $fooInvoice
     * @param \Generated\Shared\Transfer\InvoiceTransfer $invoiceTransfer
     *
     * @return \Generated\Shared\Transfer\InvoiceTransfer
     */
    public function mapEntityToTransfer(
        FooInvoice $fooInvoice,
        InvoiceTransfer $invoiceTransfer
    ): InvoiceTransfer;
}
