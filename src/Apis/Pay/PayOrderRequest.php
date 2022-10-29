<?php
/**
 * Worker: qdgpaysdk
 * Author: Zhangzhe
 * DateTime: 2022/10/28 0028 15:45
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgpaysdk\Apis\Pay;

use HuYingKeJi\Qdgpaysdk\ApiReqInterface;

/**
 * OrderRequest
 *
 */
class PayOrderRequest implements ApiReqInterface {
	private array $apiParams = [];
	private string $orderTradeNo;
	private string $openid;

	/**
	 * @return string
	 */
	public function getOpenid(): string {
		return $this->openid;
	}

	/**
	 * @param string $openid
	 */
	public function setOpenid(string $openid): void {
		$this->openid = $openid;
		$this->apiParams["openid"] = $openid;
	}


	/**
	 * @return string
	 */
	public function getOrderTradeNo(): string {
		return $this->orderTradeNo;
	}

	/**
	 * @param string $orderTradeNo
	 */
	public function setOrderTradeNo(string $orderTradeNo): void {
		$this->orderTradeNo = $orderTradeNo;
		$this->apiParams["orderTradeNo"] = $orderTradeNo;
	}


	public function getApiParams(): array {
		return $this->apiParams;
	}

	public function getUri(): string {
		return "/qdg/wechat_pay/get_order";
	}

	public function getHttpMethod(): string {
		return "post";
	}
}