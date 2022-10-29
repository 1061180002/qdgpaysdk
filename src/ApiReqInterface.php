<?php
/**
 * Worker: qdgpaysdk
 * Author: Zhangzhe
 * DateTime: 2022/10/28 0028 15:35
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgpaysdk;

interface ApiReqInterface {

	public function getApiParams(): array;

	public function getUri(): string;

	public function getHttpMethod(): string;
}