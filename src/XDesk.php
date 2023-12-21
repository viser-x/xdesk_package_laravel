<?php

namespace XDesk;

use Illuminate\Support\Facades\Http;

class XDesk
{
    public $companyID, $clientID, $adminID, $origin;
    public function __construct($companyID, $clientID, $adminID, $origin)
    {
        $this->companyID = $companyID;
        $this->clientID = $clientID;
        $this->adminID = $adminID;
        $this->origin = $origin;
    }
    public function getURL($details, $isAdmin)
    {
        $headers = [
            'companyId' => $this->companyID,
            'clientId' => $this->clientID,
            'adminId' => $this->adminID,
            'Origin' => $this->origin,
        ];

        $postData = [
            'details' => $details,
            'is_admin' => $isAdmin,
        ];

        $response = Http::withHeaders($headers)
            ->post('https://api.xdesk.viserx.dev/api/client', $postData);
        if ($response->successful()) {
            $data = $response->json();
            return $data;
        } else {
            info($response->status());
            return response('Error making API request', $response->status());
        }
    }
}
