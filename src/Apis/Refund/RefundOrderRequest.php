<?php
/**
 * Worker: qdgpaysdk
 * Author: Zhangzhe
 * DateTime: 2022/10/28 0028 15:59
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgpaysdk\Apis\Refund;

use HuYingKeJi\Qdgpaysdk\ApiReqInterface;

class RefundOrderRequest implements ApiReqInterface {
	private array $apiParams = [];
	private string $openid;
	private string $refundOrderTradeNo;

	/**
	 * @return string
	 */
	public function getRefundOrderTradeNo(): string {
		return $this->refundOrderTradeNo;
	}

	/**
	 * @param string $refundOrderTradeNo
	 */
	public function setRefundOrderTradeNo(string $refundOrderTradeNo): void {
		$this->refundOrderTradeNo = $refundOrderTradeNo;
		$this->apiParams["refundOrderTradeNo"] = $refundOrderTradeNo;
	}


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
		return "/qdg/wechat_pay/get_refund_order";
	}

	public function getHttpMethod(): string {
		return "post";
	}
}