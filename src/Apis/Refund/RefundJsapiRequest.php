<?php
/**
 * Worker: qdgpaysdk
 * Author: Zhangzhe
 * DateTime: 2022/10/28 0028 15:58
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgpaysdk\Apis\Refund;

use HuYingKeJi\Qdgpaysdk\ApiReqInterface;

/**
 * RefundJsapiRequest
 * jsapi退款
 */
class RefundJsapiRequest implements ApiReqInterface {
	private array $apiParams = [];
	private string $description = "";
	private int $total;
	private string $notify;
	private string $orderTradeNo;
	private string $openid;
	private string $timeExpire;
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
	public function getTimeExpire(): string {
		return $this->timeExpire;
	}

	/**
	 * @param string $timeExpire
	 */
	public function setTimeExpire(string $timeExpire): void {
		$this->timeExpire = $timeExpire;
		$this->apiParams["timeExpire"] = $timeExpire;
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

	/**
	 * @return string
	 */
	public function getNotify(): string {
		return $this->notify;
	}

	/**
	 * @param string $notify
	 */
	public function setNotify(string $notify): void {
		$this->notify = $notify;
		$this->apiParams["notify"] = $notify;
	}

	/**
	 * @return int
	 */
	public function getTotal(): int {
		return $this->total;
	}

	/**
	 * @param int $total
	 */
	public function setTotal(int $total): void {
		$this->total = $total;
		$this->apiParams["total"] = $total;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription(string $description): void {
		$this->description = $description;
		$this->apiParams["description"] = $description;
	}

	public function getApiParams(): array {
		return $this->apiParams;
	}

	public function getUri(): string {
		return "/qdg/wechat_pay/refund_jsapi";
	}

	public function getHttpMethod(): string {
		return "post";
	}
}