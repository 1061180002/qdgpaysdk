<?php
/**
 * Worker: qdgpaysdk
 * Author: Zhangzhe
 * DateTime: 2022/10/28 0028 15:36
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgpaysdk;

class WeChatPaySdkClient {
	private string $appKey;
	private string $appSecret;
	private string $host = "https://api.qudaogo.com/api";
	private int $timestamp;

	private string $userAgent = "qdg-pay-sdk:1.0.0";

	private string $version = "v1";

	public function __construct(string $appKey, string $appSecret) {
		$this->appKey = $appKey;
		$this->appSecret = $appSecret;
		$this->timestamp = time();
	}

	/**
	 * @param ApiReqInterface $apiReq
	 * @return string
	 */
	public function execute(ApiReqInterface $apiReq): ?string {
		$signStr = Signer::generateSign($apiReq->getApiParams(), $this->appSecret);
		$header = [
			"Content-Type" => "application/json;charset=utf-8",
			"Accept"       => "application/json",
			"Version"      => $this->version,
			"User-Agent"   => $this->userAgent,
			"Timestamp"    => $this->timestamp,
			"Appid"        => $this->appKey,
			"Sign"         => $signStr,
		];

		if ("get" === strtolower($apiReq->getHttpMethod())) {
			$resp = Http::httpGet($this->host . "/" . ltrim($apiReq->getUri(), "/"), array_merge($apiReq->getApiParams(), ["sign" => $signStr]), $header);
		} else {
			$resp = Http::httpPost($this->host . "/" . ltrim($apiReq->getUri(), "/"), array_merge($apiReq->getApiParams(), ["sign" => $signStr]), $header);
		}
		return $resp;
	}
}