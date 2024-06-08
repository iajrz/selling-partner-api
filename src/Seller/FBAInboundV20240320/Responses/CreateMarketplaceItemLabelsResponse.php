<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\DocumentDownload;

final class CreateMarketplaceItemLabelsResponse extends Response
{
    protected static array $complexArrayTypes = ['documentDownloads' => [DocumentDownload::class]];

    /**
     * @param  DocumentDownload[]  $documentDownloads  Resources to download the requested document.
     */
    public function __construct(
        public readonly array $documentDownloads,
    ) {
    }
}