<?php
namespace Omnicasa;

interface ApiAdapterInterface
{
    public function setDefaultParams(array $params): self;
    public function getBody(Request\Request $request): string;
}
